<?php

namespace App\Http\Controllers\Upload;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            return response()->json([
                'location' => asset('storage/' . $path) // URL ini akan dikembalikan ke TinyMCE
            ]);
        }

        return response()->json(['error' => 'Tidak ada file yang diupload.'], 400);
    }
}
