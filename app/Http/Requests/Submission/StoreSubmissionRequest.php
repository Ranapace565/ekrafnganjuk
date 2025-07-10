<?php

namespace App\Http\Requests\Submission;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubmissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        // dd('role');
        return $this->user()?->role === 'visitor_logged';
    }

    public function rules(): array
    {
        return [
            'sector_id'   => 'required|exists:sectors,id',
            'district_id' => 'required|exists:districts,id',
            'village_id'  => 'required|exists:villages,id',
            'name'        => 'required|string|max:255',
            'category'    => 'required|string|max:255',
            'manager'     => 'required|string|max:255',
            'proof'       => 'required|file|mimes:jpg,png,jpeg',
            'latitude'    => 'required|string',
            'longitude'   => 'required|string',
            'location'    => 'required|string',
            'description' => 'required|string',
        ];
    }
}
