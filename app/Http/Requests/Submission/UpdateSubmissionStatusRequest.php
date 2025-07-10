<?php

namespace App\Http\Requests\Submission;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubmissionStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return in_array($this->user()->role, ['admin']);
    }

    public function rules(): array
    {
        return [
            'status' => 'required|boolean',
            'note'   => 'required_if:status,false|string',
        ];
    }
}
