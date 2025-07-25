<?php

namespace App\Http\Controllers\Submission;

use App\Models\Submission;
use Illuminate\Support\Env;
use Illuminate\Http\Request;
use App\Services\SubmissionService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubmissionNotificationToAdmin;
use Illuminate\Auth\Access\AuthorizationException;
use App\Http\Requests\Submission\StoreSubmissionRequest;
use App\Http\Requests\Submission\UpdateSubmissionRequest;

class VisitorSubmissionController extends Controller
{
    public function show(SubmissionService $submissionService)
    {
        try {
            $userId = Auth::id();
            $submission = $submissionService->getByUser($userId);

            return view('main-visitor.visitor-submission')->with('data', $submission);
        } catch (\Exception $e) {
            Log::error('Gagal mendapatkan pengajuan pengguna: ' . $e->getMessage());
        }
    }
    // public function 
    public function create(SubmissionService $submissionService)
    {
        try {
            if ($submissionService->userAlreadySubmitted()) {
                return redirect()->route('visitor_logged.submission')->with(['success' => 'Anda sudah melakukan pengajuan sebelumnya, ubah untuk mengajukan ulang']);
            }
            return view('main-visitor.registration');
        } catch (\Exception $e) {
            Log::error('Gagal mengambil submission: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    public function store(StoreSubmissionRequest $request, SubmissionService $submissionService)
    {
        try {
            $this->authorize('create', Submission::class);

            $validated = $request->validated();
            $file = $request->file('proof');

            $submissionService->store($validated, $file);

            return redirect()->route('beranda')->with('success', 'Pengajuan berhasil disimpan!');
        } catch (AuthorizationException $e) {
            return redirect()->route('visitor-submission')->with('error', $e);
        }
    }

    public function update(UpdateSubmissionRequest $request, SubmissionService $submissionService, Submission $submission)
    {
        try {
            $this->authorize('update', $submission);

            $validated = $request->validated();
            $file = $request->file('proof');

            $submissionService->update($submission, $validated, $file);

            return redirect()->route('beranda')->with('success', 'Pengajuan berhasil diperbarui!');
        } catch (AuthorizationException $e) {
            return back()->with('error', 'Tidak diizinkan melakukan perubahan.');
        }
    }
}
