<?php

namespace App\Http\Controllers\Ekraf;

use Illuminate\Http\Request;
use App\Services\EkrafService;
use App\Services\SectorService;
use App\Services\DistrictService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class VisitorEkrafController extends Controller
{
    public function index(Request $request, EkrafService $EkrafService, SectorService $sectorService, DistrictService $districtService)
    {
        $search = $request->input('search');
        $districtId = $request->input('district_id');
        $sectorId = $request->input('sector_id');
        $status = 2;

        $ekrafs = $EkrafService->index($search, $sectorId, $districtId, $status);

        $district = $districtId ? $districtService->getById($districtId) : null;
        $district = $district ? $district->name : null;

        $sector = $sectorId ? $sectorService->getById($sectorId) : null;
        $sector = $sector ? $sector->name : null;

        // dd($submissions, $sector, $district);

        return view('main-visitor.sector', compact(
            'ekrafs',
            'search',
            'district',
            'sector',
            'sectorId',
            'districtId',
            'status'
        ));
    }
    public function edit(EkrafService $EkrafService, $slug)
    {
        try {
            $Ekraf = $EkrafService->getBySlug($slug);

            return view('main-visitor.ekraf-detail')->with('data', $Ekraf);
        } catch (\Exception $e) {
            Log::error('Gagal mendapatkan Ekraf: ' . $e->getMessage());
        }
    }
}
