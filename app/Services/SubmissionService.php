<?php
// app/Services/SubmissionService.php
namespace App\Services;

use App\Models\Submission;
use Illuminate\Support\Str;
use App\Events\SubmissionCreated;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\SubmissionRepositoryInterface;

class SubmissionService
{
    protected SubmissionRepositoryInterface $submissionRepository;

    public function __construct(SubmissionRepositoryInterface $submissionRepository)
    {
        $this->submissionRepository = $submissionRepository;
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
        // Mail::to('nganjukekraf@gmail.com')->send(new SubmissionNotificationToAdmin($submission));

        return $submission;
    }

    public function userAlreadySubmitted(): bool
    {
        return $this->submissionRepository->existsForUser(Auth::id());
    }

    public function getByUser($userId)
    {
        return $this->submissionRepository->findByUserId($userId);
        // Gunakan model untuk handle DB logic
        // if (Submission::hasSubmission()) {
        //     return Submission::getByUser();
        // }
        // return null;
    }

    // public function store(array $validated, $file)
    // {

    //     if ($file) {
    //         $businessSlug = Str::slug($validated['name']);
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = $businessSlug . '-' . time() . '.' . $extension;

    //         $proofPath = $file->storeAs(
    //             'business_submissions/proof',
    //             $filename,
    //             'public'
    //         );

    //         $validated['proof'] = $proofPath;
    //     }

    //     $validated['user_id'] = Auth::id();

    //     // Simpan ke DB
    //     return Submission::create($validated);
    // }


}
