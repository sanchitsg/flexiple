<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    /**
    * Allowed User ID & Password.
    **/
    public static $USER_ID  = "user_flexiple";
    public static $USER_PWD = "admin";

    /**
    * @name    postLogin
    * @desc    This function will be used to check USER LOGIN on form POST Request.
    * @params  
    * @success  redirect to "/base-layout".
    * @failed   view(login) ->  with Error Message.
    **/
    public function postLogin (Request $request) {
        $error = "";

        try {
            $inputs = $request->all();

            if(!empty($inputs['user-id']) && !empty($inputs['password']) && array_get($inputs,'user-id','') == self::$USER_ID && array_get($inputs,'password','') == self::$USER_PWD) {
                $request->session()->put('user_id', array_get($inputs,'user-id',''));
                return redirect('/base-layout');
            } else {
                $error = "Invalid User ID or Password. Please try again!";
            }
        } catch (Exception $ex) {
            $error = !empty($ex->getMessage()) ? $ex->getMessage() : "";
        }

        return back()->with('error',$error);
    }
}
