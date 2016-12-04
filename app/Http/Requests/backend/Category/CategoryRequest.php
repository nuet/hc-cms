<?php

namespace App\Http\Requests\backend\Category;

use App\Http\Requests\Request,Entrust;

class CategoryRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return Entrust::can(['category-create', 'category-update'], true);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'name' => 'required|unique:category,name,' . Request::get('id')
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Nama Diperlukan',
        ];
    }

}
