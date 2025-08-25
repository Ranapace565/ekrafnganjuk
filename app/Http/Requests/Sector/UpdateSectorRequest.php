<?php

namespace App\Http\Requests\Sector;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSectorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->role === 'admin' || 'dev';
    }

    public function rules(): array
    {
        return [
            'name'         => ['required', 'string', 'max:255'],
            'icon'        => ['required', 'image', 'max:5120'], // max 5MB
            'description'  => ['nullable', 'string'],
        ];
    }
}
