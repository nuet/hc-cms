<?php

namespace App\Http\Requests\backend\News;

use App\Http\Requests\Request,
Entrust;

class NewsRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Entrust::can(['post-create', 'post-update'], true);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_category' => 'required',
            'title' => 'required',
            'slug' => 'required',
        ];
    }

    public function messages() {
        return [
            'id_category.required' => 'Phải chọn chuyên mục',
            'title.required' => 'Phải nhập tiêu đề',
            'slug.required' => 'Phải nhập slug',
        ];
    }
}
