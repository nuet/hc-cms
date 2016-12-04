<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginAccount extends Request
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
            "username" => "required|min:5",
            "password" => "required|min:5",
        ];
    }

    public function messages()
    {
        return[
            "username.required" => "Tên đăng nhập không được trống!",
            "username.min" => "Tên đăng nhập ít nhất có 5 ký tự!",
            "password.required" => "Mật khẩu không được trống!",
            "password.min" => "Mật khẩu phải trên 5 ký tự!",
        ];
    }

    public function response(array $errors)
    {
        if ($this->ajax() || $this->wantsJson()) {
            return new JsonResponse($errors, 422);
        }
        return $this->redirector->to($this->getRedirectUrl())
                        ->withInput($this->except($this->dontFlash))
                        ->withErrors($errors, "login");
    }

}
