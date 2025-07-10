<?php
// app/Services/SubmissionService.php
namespace App\Services;

use App\Models\Submission;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class SubmissionService
{
    public function store(array $validated, $file)
    {

        if ($file) {
            $businessSlug = Str::slug($validated['name']);
            $extension = $file->getClientOriginalExtension();
            $filename = $businessSlug . '-' . time() . '.' . $extension;

            $proofPath = $file->storeAs(
                'business_submissions/proof', // disimpan di storage/app/public/
                $filename,
                'public'
            );

            $validated['proof'] = $proofPath;
        }

        $validated['user_id'] = Auth::id();

        // Simpan ke DB
        return Submission::create($validated);
    }

    public function find()
    {
        $userId = Auth::id();

        // Cek apakah user sudah memiliki submission
        $existing = Submission::where('user_id', $userId)->exists();
        if ($existing) {
            return true;
        } else {
            return false;
        }
    }
}
