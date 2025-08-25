<?php

namespace App\Http\Controllers\Landingpage;

use Illuminate\Http\Request;
use App\Services\SectorService;
use App\Http\Controllers\Controller;
use App\Services\EventService;

class BerandaController extends Controller
{
    public function index(SectorService $SectorService, EventService $eventService, Request $request)
    {
        $search = $request->input('search');
        $sectorId = $request->input('sector_id');
        $status = $request->input('status');

        $Sectors = $SectorService->index();

        $events = $eventService->indexAdmin($search, $sectorId,  2);

        return view('main-visitor.index', compact(
            'Sectors',
            'events'
        ));
    }
}
