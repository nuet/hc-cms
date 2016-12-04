<?php

namespace App\Http\Controllers\backend\Options;

use App\Http\Controllers\Controller;
use App\Models\Options;
use App\Http\Requests\backend\Options\GeneralRequest;
use DB,
    Config,
    Request,
    Entrust;

class OptionsCtrl extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct() {
        $this->data['title'] = ucfirst(trans('sidebar.options'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex() {
        $this->data['sub_title'] = '';
        return view('backend.options.index', $this->data);
    }
    /**
     * 
     * @return type
     */
    public function getOptionsindex() {
        $input = Request::except('_token');
        $this->data['general'] = Options\GeneralOption::wheretype($input['type'])->wherelang(getLang())->get();
        return view('backend.options.options', $this->data);
    }
    /**
     * 
     * @param GeneralRequest $request
     * @return type
     */
    public function postOptionsstore() {
        $input = Request::except('_token');
        foreach ($input as $key => $val) {
            Options\GeneralOption::wherename($key)->wherelang(getLang())->update(['val' => $val]);
        }
        return response()->json(['success' => TRUE]);
    }
    /**
     * 
     * @return type
     */
    public function getCustomizeindex() {
        $this->data['general'] = Options\GeneralOption::wheretype(config('constants.optiontype.customize'))->wherelang(getLang())->get();
        return view('backend.options.customize.index', $this->data);
    }
    /**
     * 
     * @return type
     */
    public function getMailindex() {
        $this->data['mail'] = Options\MailOption::lists('mail_value', 'mail_key');
        return view('backend.options.mail.index', $this->data);
    }
    /**
     * 
     * @return type
     */
    public function postMailstore() {
        $input = Request::except('_token');
        foreach ($input as $key => $val) {
            $ship = Options\MailOption::where('mail_key', $key)->update(['mail_value' => $val]);
        }
        if ($ship) {
            return response()->json(['success' => TRUE]);
        }
    }
}