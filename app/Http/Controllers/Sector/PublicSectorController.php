<?php

namespace App\Http\Controllers\Sector;

use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class PublicSectorController extends Controller
{
    public function index()
    {
        try {
            $sectors = Sector::all();

            return response()->json([
                'success' => true,
                'data' => $sectors,
            ]);
        } catch (\Exception $e) {
            // Log error untuk debugging
            Log::error('Gagal mengambil data sektor: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mengambil data sektor.',
            ], 500);
        }
    }
}
