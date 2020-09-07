<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:categories|max:191|min:5'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Tên thể loại không được bỏ trống!',
            'name.unique' => 'Thể loại đã tồn tại!',
            'name.max' => 'Tên thể loại phải nhỏ hơn 191 kí tự!',
            'name.min' => 'Tên thể loại phải lớn hơn 5 kí tự!',
        ];
    }
}
