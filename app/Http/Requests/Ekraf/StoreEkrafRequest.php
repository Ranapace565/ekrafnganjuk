<?php

namespace App\Http\Requests\Ekraf;

use Illuminate\Foundation\Http\FormRequest;

class StoreEkrafRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->role === 'admin' || 'dev';
    }

    public function rules(): array
    {
        return [
            'user_id'       => 'required|exists:users,id',
            'sector_id'     => 'required|exists:sectors,id',
            'district_id'   => 'required|exists:districts,id',
            'village_id'    => 'required|exists:villages,id',
            'name'          => 'required|string|max:255',
            'contact'       => 'required|string|max:14',
            'category'      => 'required|string|max:255',
            'manager'       => 'required|string|max:255',
            'latitude'      => 'required|string',
            'longitude'     => 'required|string',
            'location'      => 'required|string',
            'description'   => 'required|string',
        ];
    }
}
