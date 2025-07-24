<?php
// app/Services/SubmissionService.php
namespace App\Services;

use App\Models\Submission;
use Illuminate\Support\Str;
use App\Events\Submission\SubmissionCreated;
use App\Events\Submission\SubmissionReject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interfaces\SubmissionRepositoryInterface;

class SubmissionService
{
    protected SubmissionRepositoryInterface $submissionRepository;

    public function __construct(SubmissionRepositoryInterface $submissionRepository)
    {
        $this->submissionRepository = $submissionRepository;
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

            // Hapus file lama jika perlu
            if ($submission->proof && Storage::disk('public')->exists($submission->proof)) {
                Storage::disk('public')->delete($submission->proof);
            }

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
}
