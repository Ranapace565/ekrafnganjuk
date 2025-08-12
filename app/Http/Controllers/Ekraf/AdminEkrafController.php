<?php

namespace App\Http\Controllers\Ekraf;

use App\Models\Ekraf;
use Illuminate\Http\Request;
use App\Services\EkrafService;
use App\Services\SectorService;
use App\Services\DistrictService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Ekraf\StoreEkrafRequest;
use Illuminate\Auth\Access\AuthorizationException;

class AdminEkrafController extends Controller
{
    public function index(Request $request, EkrafService $EkrafService, SectorService $sectorService, DistrictService $districtService)
    {
        $search = $request->input('search');
        $districtId = $request->input('district_id');
        $sectorId = $request->input('sector_id');
        $status = $request->input('status');

        $ekrafs = $EkrafService->index($search, $sectorId, $districtId, $status);

        $district = $districtId ? $districtService->getById($districtId) : null;
        $district = $district ? $district->name : null;

        $sector = $sectorId ? $sectorService->getById($sectorId) : null;
        $sector = $sector ? $sector->name : null;

        return view('main-admin.business', compact(
            'ekrafs',
            'search',
            'district',
            'sector',
            'sectorId',
            'districtId', 
            'status'
        ));
    }

    public function store(StoreEkrafRequest $request, EkrafService $EkrafService)
    {
        try {
            $this->authorize('create', Ekraf::class);

            $validated = $request->validated();

            $EkrafService->store($validated);

            return redirect()->route('admin.ekraf.')->with('success', 'Data Ekraf Berhasil Disimpan!');
        } catch (AuthorizationException $e) {
            return redirect()->route('admin.ekraf.')->withInput()->with('error', $e);
        }
    }
}
