<?php

namespace App\Http\Requests\backend\Widget;

use App\Http\Requests\Request;
use Entrust;

class ImageRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return Entrust::can(['slideshow-create', 'slideshow-update'], true);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            //
            'img_name'  =>  'required',
            'path_full'  =>  'required',
        ];
    }

    public function messages() {
        return [
            'img_name.required' => 'Phải nhập tên ảnh',
            'path_full.required' => 'Phải nhập đường dẫn ảnh',
        ];
    }
}
