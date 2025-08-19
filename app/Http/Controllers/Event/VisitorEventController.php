<?php

namespace App\Http\Controllers\Event;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\EventService;
use App\Services\SectorService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Repositories\EventRepository;

class VisitorEventController extends Controller
{
    public function index(Request $request, EventService $EventService, SectorService $sectorService)
    {
        $search = $request->input('search');
        $sectorId = $request->input('sector_id');
        $status = $request->input('status');

        $Events = $EventService->indexAdmin($search, $sectorId,  2);

        $sector = $sectorId ? $sectorService->getById($sectorId) : null;
        $sector = $sector ? $sector->name : null;

        return view('main-visitor.event', compact(
            'Events',
            'search',
            'sector',
            'sectorId',
            'status'
        ));
    }

    public function show(EventService $EventService, $slug)
    {
        try {
            $Event = $EventService->findBySlug($slug);

            return view('main-visitor.event-detail')->with('data', $Event);
        } catch (\Exception $e) {
            Log::error('Gagal mendapatkan event: ' . $e->getMessage());
        }
    }

    public function search(Request $request, EventRepository $eventRepository)
    {
        $query = $request->get('q');
        $events = $eventRepository->searchAndPaginateAll($query, null, 5);

        return response()->json($events->map(function ($event) {
            return [
                'title' => $event->title,
                'slug' => $event->slug,
                'date' => $event->date->format('d M Y'),
                'description' => Str::limit($event->description, 120),
            ];
        }));
    }
}
