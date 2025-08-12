<?php

namespace App\Http\Requests\Ekraf;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEkrafRequest extends FormRequest
{
    public function authorize(): bool
    {
        return in_array($this->user()?->role, ['entrepreneur', 'admin', 'dev']);
    }


    public function rules(): array
    {
        return [
            'sector_id'    => ['required', 'exists:sectors,id'],
            'district_id'  => ['required', 'exists:districts,id'],
            'village_id'   => ['required', 'exists:villages,id'],
            'name'         => ['required', 'string', 'max:255'],
            'contact'      => ['required', 'string', 'max:255'],
            'category'     => ['required', 'string', 'max:255'],
            'manager'      => ['required', 'string', 'max:255'],
            'logo'         => ['nullable', 'image', 'max:2048'], // max 2MB
            'cover'        => ['nullable', 'image', 'max:5120'], // max 5MB
            'latitude'     => ['required', 'string', 'max:255'],
            'longitude'    => ['required', 'string', 'max:255'],
            'location'     => ['required', 'string', 'max:255'],
            'description'  => ['nullable', 'string', 'max:1000'],
            'active'       => ['nullable', 'boolean'],
            'note'         => ['nullable', 'string', 'max:1000'],
            'male'         => ['nullable', 'numeric', 'min:0'],
            'female'       => ['nullable', 'numeric', 'min:0'],
        ];
    }
}
