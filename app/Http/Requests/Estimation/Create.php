<?php

namespace App\Http\Requests\Estimation;

use Illuminate\Foundation\Http\FormRequest;

class Create extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'integer', 'exists:user,id'],
            'post_id' => ['required', 'integer', 'exists:post,id'],
            'option' => ['required', 'string'],
            'radio' => ['required', 'string'],
            'message' => ['nullable', 'string'],
        ];
    }
}
