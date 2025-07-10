<?php

namespace App\Http\Requests\Submission;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubmissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('update', $this->route('submission'));
    }

    public function rules(): array
    {
        return [
            'name'        => 'sometimes|string|max:255',
            'category'    => 'sometimes|string|max:255',
            'manager'     => 'sometimes|string|max:255',
            'proof'       => 'sometimes|string',
            'latitude'    => 'sometimes|string',
            'longitude'   => 'sometimes|string',
            'location'    => 'sometimes|string',
            'description' => 'sometimes|string',
            'sector_id'   => 'sometimes|exists:sectors,id',
        ];
    }
}
