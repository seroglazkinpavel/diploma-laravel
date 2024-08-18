<?php

namespace App\Http\Requests\Admin\News;

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
            'category_id' => ['required', 'integer', 'exists:categories,id'],//exists-существовать id categories проверим что в таблице categories поле id должно быть значение category_id
            'title' => ['required', 'string', 'min:3', 'max:150'],
            'author' => ['required', 'string', 'min:2', 'max:100'],
            'image' => ['nullable', 'image'],
            'status' => ['required', 'string'], // new enum(Status::class)
            'description' => ['nullable', 'string'],
        ];
    }
}
