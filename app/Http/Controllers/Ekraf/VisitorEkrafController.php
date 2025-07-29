<?php

namespace App\Http\Controllers\Ekraf;

use App\Models\Ekraf;
use Illuminate\Http\Request;
use App\Services\EkrafService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Ekraf\UpdateEkrafRequest;
use Illuminate\Auth\Access\AuthorizationException;

class VisitorEkrafController extends Controller
{


    public function update(UpdateEkrafRequest $request, EkrafService $ekrafService, Ekraf $ekraf)
    {
        try {
            $this->authorize('update', $ekraf);

            $validated = $request->validated();
            $file = $request->file('proof');

            $ekrafService->update($ekraf, $validated);

            return redirect()->route('beranda')->with('success', 'Pengajuan berhasil diperbarui!');
        } catch (AuthorizationException $e) {
            return back()->with('error', 'Tidak diizinkan melakukan perubahan.');
        }
    }
}
