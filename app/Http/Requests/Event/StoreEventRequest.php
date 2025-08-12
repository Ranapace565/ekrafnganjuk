<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->role === 'entrepreneur' || 'admin' || 'dev';
    }

    public function rules(): array
    {
        return [
            'sector_id'    => ['required', 'exists:sectors,id'],
            'title'         => ['required', 'string', 'max:255'],
            'poster'        => ['nullable', 'image', 'max:5120'], // max 5MB
            'start_date'   =>  ['nullable', 'date'],
            'end_date'   =>  ['nullable', 'date'],
            'latitude'     => ['required', 'string', 'max:255'],
            'longitude'    => ['required', 'string', 'max:255'],
            'location'     => ['required', 'string', 'max:255'],
            'description'  => ['nullable', 'string', 'max:1000'],
        ];
    }
}
