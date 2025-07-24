<?php

namespace App\Http\Controllers\Submission;

use App\Models\Sector;
use App\Models\District;
use App\Models\Submission;
use Illuminate\Http\Request;
use App\Services\SectorService;
use App\Services\DistrictService;
use App\Services\SubmissionService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\AuthorizationException;
use App\Http\Requests\Submission\UpdateSubmissionStatusRequest;

class AdminSubmissionController extends Controller
{

    public function index(Request $request, SubmissionService $submissionService, SectorService $sectorService, DistrictService $districtService)
    {
        $search = $request->input('search');
        $districtId = $request->input('district_id');
        $sectorId = $request->input('sector_id');

        $submissions = $submissionService->index($search, $sectorId, $districtId);

        $district = $districtId ? $districtService->getById($districtId) : null;
        $district = $district ? $district->name : null;

        $sector = $sectorId ? $sectorService->getById($sectorId) : null;
        $sector = $sector ? $sector->name : null;

        // dd($submissions, $sector, $district);

        return view('main-admin.business-submission', compact(
            'submissions',
            'search',
            'district',
            'sector',
            'sectorId',
            'districtId'
        ));
    }
    public function show(SubmissionService $submissionService, $id)
    {
        try {
            // $userId = Auth::id();
            $submission = $submissionService->getById($id);

            return view('main-admin.business-submission-detail')->with('data', $submission);
        } catch (\Exception $e) {
            Log::error('Gagal mendapatkan pengajuan pengguna: ' . $e->getMessage());
        }

        return redirect()->route('admin.');
    }

    public function reject(UpdateSubmissionStatusRequest $request, SubmissionService $submissionService, Submission $submission)
    {
        try {

            // dd('');
            $this->authorize('updateStatus', $submission);
            $validated = $request->validated();

            $submissionService->reject($submission, $validated);

            return redirect()->route('admin.business.submission.')->with('success', 'Pengajuan berhasil ditolak!');
        } catch (AuthorizationException $e) {
            return back()->with('error', 'Tidak diizinkan melakukan perubahan.');
        }
    }
}
