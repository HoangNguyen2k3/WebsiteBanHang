<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
            'name' => 'bail|required|unique:products|max:255|min:5',
            'price'=>'required',
            'category_id'=>'required',
        ];
    }
    public function messages(): array
{
    return [
        'name.required' => 'Tên không được để trống',
        'name.unique' => 'Tên không được đã tồn tại',
        'price.required' => 'Giá tiền không được để trống',
        'category_id.required'=>'Danh mục không được để trống',
    ];
}


}
