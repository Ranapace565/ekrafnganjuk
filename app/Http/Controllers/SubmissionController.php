<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\SubmissionService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;
use App\Http\Requests\Submission\StoreSubmissionRequest;
use App\Http\Requests\Submission\UpdateSubmissionRequest;
use App\Http\Requests\Submission\UpdateSubmissionStatusRequest;

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
            return redirect()->route('beranda')->with('error', 'Anda sudah pernah mengajukan, buka halaman pengajuan untuk mengubah informasi pengajuan anda.');
        }
    }
}
