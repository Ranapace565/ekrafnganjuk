<?php

namespace App\Http\Controllers\Event;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Services\EventService;
use App\Services\SectorService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\Event\StoreEventRequest;
use App\Http\Requests\Event\UpdateEventRequest;
use Illuminate\Auth\Access\AuthorizationException;

class AdminEventController extends Controller
{
    public function index(Request $request, EventService $EventService, SectorService $sectorService)
    {
        $search = $request->input('search');
        $sectorId = $request->input('sector_id');
        $status = $request->input('status');

        $Events = $EventService->indexAdmin($search, $sectorId,  $status);

        $sector = $sectorId ? $sectorService->getById($sectorId) : null;
        $sector = $sector ? $sector->name : null;

        return view('main-admin.event', compact(
            'Events',
            'search',
            'sector',
            'sectorId',
            'status'
        ));
    }
    public function store(StoreEventRequest $request, EventService $EventService)
    {
        try {
            $this->authorize('create', Event::class);

            $validated = $request->validated();
            $validated['status'] = '2';

            $EventService->store($validated);

            return redirect()->route('admin.event.')->with('success', 'Data Event Berhasil Disimpan!');
        } catch (AuthorizationException $e) {
            return redirect()->route('admin.event.form')->withInput()->with('error', $e);
        }
    }

    public function edit(EventService $EventService, $slug)
    {
        try {
            $Event = $EventService->findBySlug($slug);

            return view('main-admin.event-update')->with('data', $Event);
        } catch (\Exception $e) {
            Log::error('Gagal mendapatkan pengajuan pengguna: ' . $e->getMessage());
        }
    }

    public function update(UpdateEventRequest $request, EventService $EventService, Event $Event)
    {
        try {
            $this->authorize('update', $Event);

            $validated = $request->validated();
            $file = $request->file('poster');

            $EventService->update($Event, $validated, $file);

            return redirect()->route('entrepreneur.event.')->with('success', 'Pengajuan Event berhasil diperbarui!');
        } catch (AuthorizationException $e) {
            return back()->with('error', 'Tidak diizinkan melakukan perubahan.' . $e->getMessage());
        }
    }

    public function destroy(EventService $EventService, Event $Event)
    {
        try {
            $EventService->destroy($Event);

            return redirect()->route('admin.event.')->with('success', 'Event berhasil dihapus!');
        } catch (AuthorizationException $e) {
            return back()->with('error', 'Tidak diizinkan melakukan penghapusan event.' . $e->getMessage());
        }
    }
}
