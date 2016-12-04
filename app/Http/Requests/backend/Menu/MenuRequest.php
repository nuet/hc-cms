<?php

namespace App\Http\Requests\backend\Menu;

use App\Http\Requests\Request,
Entrust;

class MenuRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return Entrust::can(['menu-create', 'menu-update'], true);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            //
            'menu_type' => 'required',
            "menu_name" => "required",
            "menu_slug" => 'required|unique:menu,menu_slug,' . Request::get('id'),
        ];
    }

    public function messages() {
        return [
            'menu_type' => 'Loại menu chưa được chọn',
            'menu_name.required' => 'Tiêu đề chưa được nhập',
            'menu_slug.required' => 'Slug chưa được nhập',
            'menu.slug.unique' => 'Slug đã tồn tại',
        ];
    }

}