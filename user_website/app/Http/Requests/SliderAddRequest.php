<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderAddRequest extends FormRequest
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
            'name'=>'required|unique:sliders|max:255',
            'description'=>'required',
            'image_path'=>'required'
        ];
    }
    public function messages(): array
{
    return [
        'name.required' => 'Tên slider không được để trống',
        'name.unique'=>'Tên slider không được để trùng',
        'description.required' => 'Mô tả không được để trống',
        'image_path.required' => 'Mô tả không được để trống',

    ];
}
}
