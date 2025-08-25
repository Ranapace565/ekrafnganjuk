<?php

namespace App\Http\Controllers\Sector;

use App\Models\Sector;
use Illuminate\Http\Request;
use App\Services\SectorService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\Sector\StoreSectorRequest;
use App\Http\Requests\Sector\UpdateSectorRequest;
use Illuminate\Auth\Access\AuthorizationException;

class AdminSectorController extends Controller
{
    public function index(Request $request, SectorService $SectorService)
    {
        $search = $request->input('search');

        $Sectors = $SectorService->index($search);

        return view('main-admin.sector', compact(
            'Sectors',
            'search'
        ));
    }
    public function store(StoreSectorRequest $validated, SectorService $SectorService)
    {
        try {
            $this->authorize('create', Sector::class);
            $SectorService->store($validated->validated());

            return redirect()->route('admin.sector.')->with('success', 'Data Sector Berhasil Disimpan!');
        } catch (AuthorizationException $e) {
            return redirect()->route('admin.sector.form')->withInput()->with('error', $e);
        }
    }

    public function edit(SectorService $SectorService, $id)
    {
        try {
            $Sector = $SectorService->getById($id);

            return view('main-admin.sector-update')->with('data', $Sector);
        } catch (\Exception $e) {
            Log::error('Gagal Sektor: ' . $e->getMessage());
        }
    }

    public function update(UpdateSectorRequest $request, SectorService $SectorService, Sector $Sector)
    {
        try {
            $this->authorize('update', $Sector);

            $validated = $request->validated();
            $file = $request->file('icon');

            $SectorService->update($Sector, $validated, $file);

            return redirect()->route('admin.sector.')->with('success', 'Pengajuan Sector berhasil diperbarui!');
        } catch (AuthorizationException $e) {
            return back()->with('error', 'Tidak diizinkan melakukan perubahan.' . $e->getMessage());
        }
    }

    public function destroy(SectorService $SectorService, Sector $Sector)
    {
        try {
            $SectorService->destroy($Sector);

            return redirect()->route('admin.sector.')->with('success', 'Sector berhasil dihapus!');
        } catch (AuthorizationException $e) {
            return back()->with('error', 'Tidak diizinkan melakukan penghapusan Sector.' . $e->getMessage());
        }
    }
}
