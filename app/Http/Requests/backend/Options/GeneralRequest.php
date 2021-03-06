<?php

namespace App\Http\Requests\backend\Options;

use App\Http\Requests\Request;

class GeneralRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            //
            'url' => 'required|url',
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'logo' => 'required'
        ];
    }

}
