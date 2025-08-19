<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,webp|max:3072', // 3MB
            'deleted_images' => 'nullable', // JSON string
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $MAX = 3;

            // product harus sudah tersedia (misal di route model binding / cari by slug)
            $product = $this->route('product') ?? $this->product ?? null; // sesuaikan
            if (!$product) return;

            $current = $product->images()->count();
            $deleted = collect(json_decode($this->input('deleted_images', '[]'), true))->count();
            $new = $this->hasFile('images') ? count($this->file('images')) : 0;

            if (($current - $deleted + $new) > $MAX) {
                $validator->errors()->add('images', "Total foto melebihi batas {$MAX}.");
            }
        });
    }
}
