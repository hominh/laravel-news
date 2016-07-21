<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
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
            'txtPostName' => 'required|unique:posts,name',
            'category' => 'required',
            //'fileimages' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'txtPostName.required' => 'Tên sản phẩm không được bỏ trống',
            'txtPostName.unique' => 'Tên sản phẩm không được trùng nhau',
            'category.required' => 'Danh mục của sản phẩm phải được chọn',
            //'fileimages.required' => 'Chưa upload ảnh của sản phẩm',
            //'fileimages.image' => 'Bạn phải chọn file ảnh'
        ];
    }
}
