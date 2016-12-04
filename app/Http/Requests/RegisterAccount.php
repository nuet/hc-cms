<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterAccount extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}
	public function rules()
	{
		return [
                    "username"=>"required|min:6|unique:users",
                    "password"=>"required|min:6",
                    "repassword"=>"same:password",
                    "email"=>"min:6|email|unique:users",
                    "first_name"=>"required",
                    "last_name"=>"required",
                    "mob_phone"=>"required|min:6"
		];
	}
        public function messages()
        {
            return[
               "username.required"=> "Tên đăng nhập không được trống!",
               "username.min"=>"Tên đăng nhập ít nhất có 6 ký tự!",
               "username.unique"=>"Tên đăng nhập này đã tồn tại!",
               "password.required"=>"Mật khẩu không được trống!",
               "password.min"=>"Mật khẩu phải trên 6 ký tự!",
               "repassword.same"=>"Mật khẩu xác nhận chưa đúng!",
               "email.min"=>"Email ít nhất phải có 6 ký tự!",
               "email.email"=>"Email chưa đúng định dạng!",
               "email.unique"=>"Email đã được sử dụng!",
               "first_name.required"=>"Họ không được phép trống!",
                "last_name.required"=>"Tên không được phép trống!",
                "mob_phone.required"=>"Số điện thoại không được phép trống!",
                "mob_phone.min"=>"Số điện thoại quá ngắn!",
            ];
        }
        public function response(array $errors)
	{
		if ($this->ajax() || $this->wantsJson())
		{
			return new JsonResponse($errors, 422);
		}
		return $this->redirector->to($this->getRedirectUrl())
                                        ->withInput($this->except($this->dontFlash))
                                        ->withErrors($errors, "register");
	}

}
