<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use illuminate\html;
// use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;

class AuthController extends Controller
{
    //getlogin

    public function getLogin(){
        return View('login');
    }

    public function postLogin(Request $request){
        
        $rules = array('username'=> 'required','password'=> 'required');
        $validator = Validator::make($request->all(),$rules);
        // $validator = Validator::make(Input::all(),$rules);             
        
        

        if ($validator->fails()) {
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        

            // $auth = Auth::attempt(array(
            //     'name' => Input::get('username'),
            //     'password' => Input::get('password')
            // ),false);

            // if(!$auth){
            //     return Redirect('login')->withErrors(array( 
            //         'invalid credentials were provided'
            //  }   ));

                // return redirect('ToDo');
            
        }
    }
}

// if ($validator->fails()) {
//     return redirect('post/create')
//                 ->withErrors($validator)
//                 ->withInput();
// }