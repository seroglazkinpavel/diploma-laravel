<?php

namespace App\Http\Requests\Menu\Reviews;

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
            'name' => ['required', 'string', 'min:2', 'max:100'],
            'image' => ['nullable', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048', 'dimensions:max_width=100,max_height=100'],
            'message' => ['required', 'string'],
        ];
    }

    public function messages()
    { return [
//        'image.required' => 'Please upload an image.',
        'image.image' => 'Please upload a valid image file.',
        'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
        'image.max' => 'The image must not exceed 2MB in size.',
        ];
    }


}
