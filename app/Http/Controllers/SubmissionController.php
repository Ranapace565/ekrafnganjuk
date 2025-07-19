<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Services\SubmissionService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\AuthorizationException;
use App\Http\Requests\Submission\StoreSubmissionRequest;

class SubmissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
            return redirect()->route('registration')->with('error', 'Anda sudah pernah mengajukan, ubah informasi di halaman ini untuk mengubah informasi pengajuan anda.');
        }
    }

    // public function showUserSubmission(SubmissionService $submissionService)
    // {
    //     try {
    //         $this->authorize('view', Submission::class);

    //         $submission = $submissionService->getByUser();

    //         if ($submission) {
    //             return response()->json([
    //                 'success' => true,
    //                 'message' => 'Anda sudah melakukan pengajuan sebelumnya.',
    //                 'data' => $submission,
    //             ]);
    //         }

    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Belum ada submission.',
    //         ], 404);
    //     } catch (\Exception $e) {
    //         Log::error('Gagal mengambil submission: ' . $e->getMessage());

    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Terjadi kesalahan server.',
    //         ], 500);
    //     }
    // }
}
