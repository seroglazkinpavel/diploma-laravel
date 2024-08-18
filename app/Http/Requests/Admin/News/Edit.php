<?php

namespace App\Http\Requests\Admin\News;

use App\Enums\Posts\Status;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class Edit extends FormRequest
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
            'status' => ['required', 'string'], // new Enum(Status::class)
            'description' => ['nullable', 'string'],
        ];
    }

//    public function messages(): array
//    {
//
//        return [
//            'required' => 'Поле :attribute является обязательным для заполнения.',
//        ];
//    }
//
//    public function attributes(): array
//    {
//        return [
//            'title' => '"Заголовок"'
//        ];
//
//    }
}
