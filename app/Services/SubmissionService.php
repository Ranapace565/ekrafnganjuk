<?php
// app/Services/SubmissionService.php
namespace App\Services;

use App\Models\Ekraf;
use App\Models\Submission;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Events\Submission\SubmissionReject;
use App\Events\Submission\SubmissionApprove;
use App\Events\Submission\SubmissionCreated;
use App\Repositories\Interfaces\EkrafRepositoryInterface;
use App\Repositories\Interfaces\SubmissionRepositoryInterface;

class SubmissionService
{
    protected $submissionRepository;

    protected $ekrafRepository;

    protected $userRepository;

    public function __construct(SubmissionRepositoryInterface $submissionRepository, EkrafRepositoryInterface $ekrafRepository, UserRepositoryInterface $userRepository)
    {
        $this->submissionRepository = $submissionRepository;

        $this->ekrafRepository = $ekrafRepository;

        $this->userRepository = $userRepository;
    }

    public function index(?string $search = null, ?int $sector = null, ?int $district = null)
    {
        return $this->submissionRepository->searchAndPaginate($search, $sector, $district);
    }

    public function store(array $validated, $file = null)
    {
        if ($file) {
            $slug = Str::slug($validated['name']);
            $ext = $file->getClientOriginalExtension();
            $filename = $slug . '-' . time() . '.' . $ext;

            $proofPath = $file->storeAs(
                env('SUBMISSION_PROOF_PATH', 'business_submissions/proof'),
                $filename,
                'public'
            );

            $validated['proof'] = $proofPath;
        }

        $validated['user_id'] = Auth::id();

        $submission = $this->submissionRepository->store($validated);

        event(new SubmissionCreated($submission));

        return $submission;
    }

    public function update(Submission $submission, array $validated, $file = null)
    {
        $wasRejected = $submission->status === 0;
        $validated['status'] = 1;

        if ($file) {
            $slug = Str::slug($validated['name']);
            $ext = $file->getClientOriginalExtension();
            $filename = $slug . '-' . time() . '.' . $ext;

            $proofPath = $file->storeAs(
                env('SUBMISSION_PROOF_PATH', 'business_submissions/proof'),
                $filename,
                'public'
            );

            $this->deleteProofFile($submission);

            $validated['proof'] = $proofPath;
        }

        $submission = $this->submissionRepository->update($submission, $validated);

        if ($wasRejected) {
            event(new SubmissionCreated($submission));
        }

        return $submission;
    }

    public function reject(Submission $submission, array $validated,)
    {
        $validated['status'] = 0;

        $submission = $this->submissionRepository->update($submission, $validated);

        event(new SubmissionReject($submission));

        return $submission;
    }

    public function approve(Submission $submission, Ekraf $ekraf)
    {

        $ekraf = $this->ekrafRepository->createFromSubmission($submission);

        $user = $submission->user()->first();
        $this->userRepository->update($user, ['role' => 'entrepreneur']);

        event(new SubmissionApprove($submission));

        $this->deleteProofFile($submission);

        $submission = $this->submissionRepository->destroy($submission);

        return $ekraf;
    }

    public function userAlreadySubmitted(): bool
    {
        return $this->submissionRepository->existsForUser(Auth::id());
    }

    public function getByUser($userId)
    {
        return $this->submissionRepository->findByUserId($userId);
    }

    public function getById($id)
    {
        return $this->submissionRepository->findById($id);
    }

    protected function deleteProofFile(Submission $submission)
    {
        if ($submission->proof && Storage::disk('public')->exists($submission->proof)) {
            Storage::disk('public')->delete($submission->proof);
        }
    }
}
