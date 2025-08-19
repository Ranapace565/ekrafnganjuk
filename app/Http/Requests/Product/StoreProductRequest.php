<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()?->role === 'entrepreneur';
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'images' => 'nullable|array|max:3',
            'images.*' => 'image|mimes:jpeg,png,jpg,webp|max:3072', // 3MB
        ];
    }
}
