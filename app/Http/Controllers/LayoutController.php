<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{

    /**
    * @name    getIndex
    * @desc    This function will be used to load BASE LAYOUT Page.
    * @params  
    * @success  view(home)
    * @failed   view(login) ->  with Error Message.
    **/
    public function getIndex (Request $request) {
        $error = "";
        $header_data = $content_data = [];

        try {
            $user_id = $request->session()->get('user_id','');

            return view('home',compact('header_data','content_data'));
        } catch (Exception $ex) {
            $error = !empty($ex->getMessage()) ? $ex->getMessage() : "";
        }

        return back()->with('error',$error);
    }


    /**
    * @name    postForm
    * @desc    This function will be used to render updated HOME Page after user edits details.
    * @params  
    * @success  view(home)
    * @failed   view(login) ->  with Error Message.
    **/
    public function postForm (Request $request) {
        $error = "";

        try {
            $inputs = $request->all();
            $header_data = $content_data = [];

            if(!empty($inputs['form-type']) && array_get($inputs,'form-type','') == "edit-header") {
                $file_name = "brand_logo" . time() . ".jpg";

                if($request->hasFile('header-brand-image')) {
                    $request->file('header-brand-image')->move(public_path('assets/images'), $file_name);
                }

                $header_data = [
                    'image'         =>  "assets/images/" . $file_name,
                    'brand_name'    =>  strip_tags(array_get($inputs,'brand-name','')),
                    'background-color'  => array_get($inputs,'background-color',''),
                    'brand-name-color'  => array_get($inputs,'brand-name-color',''),
                    'other-font-color'  => array_get($inputs,'other-font-color','')
                ];

                if(!empty($inputs['menu-name'])) {
                    foreach($inputs['menu-name'] as $name) {
                        $header_data['names'][] = strip_tags($name);
                    }
                }
            } else if(!empty($inputs['form-type']) && array_get($inputs,'form-type','') == "edit-content") {
                $file_name = "content_image" . time() . ".jpg";

                if($request->hasFile('content-image')) {
                    $request->file('content-image')->move(public_path('assets/images'), $file_name);
                }

                $content_data['content-image'] = "assets/images/" . $file_name;
                if(!empty($inputs['input-field-details'])) {
                    $count = 0;
                    foreach($inputs['input-field-details'] as $det) {
                        $content_data['input-details'][] = [
                            'name'  =>  strip_tags(array_get($det,'name','')),
                            'type'  =>  strip_tags(array_get($det,'type',''))
                        ];
                    }
                }
            }

            return view('home',compact('header_data','content_data'));
        } catch (Exception $ex) {
            $error = !empty($ex->getMessage()) ? $ex->getMessage() : "";
        }

        return back()->with('error',$error);
    }
}
