<?php

namespace App\Http\Controllers\Ekraf;

use App\Models\Ekraf;
use App\Services\EkrafService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Ekraf\UpdateEkrafRequest;

class EntrepreneurEkrafController extends Controller
{
    public function show(EkrafService $EkrafService)
    {
        try {
            $userId = Auth::id();
            $Ekraf = $EkrafService->getByUser($userId);

            // dd($Ekraf);

            return view('main-entrepreneur.business-update')->with('data', $Ekraf);
        } catch (\Exception $e) {
            Log::error('Gagal mendapatkan pengajuan pengguna: ' . $e->getMessage());
        }
    }

    public function update(EkrafService $ekrafService, UpdateEkrafRequest $request, Ekraf $ekraf)
    {
        try {
            $validated = $request->validated();

            if ($request->has('remove_logo')) {
                $validated['remove_logo'] = $request->input('remove_logo');
            }

            if ($request->has('remove_cover')) {
                $validated['remove_cover'] = $request->input('remove_cover');
            }

            $ekrafService->update($ekraf, $validated);

            return redirect()
                ->route('entrepreneur.business.detail')
                ->with('success', 'Data ' . $validated['name'] . ' berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error('Gagal memperbarui data ekraf: ' . $e->getMessage());

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat memperbarui data.' . $e->getMessage());
        }
    }
}
