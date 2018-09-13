<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use Illuminate\Support\Facades\Auth;
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





                     //Post の処理
    public function postLogin(Request $request){
        
        $rules = array('username'=> 'required','password'=> 'required');
        $validator = Validator::make($request->all(),$rules);
        // $validator = Validator::make(Input::all(),$rules);             
        
        

        if ($validator->fails()) {
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        
        }
        $name = Input::get('username');
        $password = Input::get('password');
        print_r($name);
        print_r($password);
        $p = User::where('name',$name)->where("password",$password)->get();
        print_r($p->toArray());
            
        
    }
}

// if (Auth::attempt([ )) {
//     // 認証に成功した
//     return redirect()->intended('dashboard')















            // $auth = Auth::attempt([
            //     'name' => Input::get('username'),
            //     'password' => Input::get('password')
            // ]);

            // if(Auth::attempt(array([
            //     'name' => Input::get('username'),
            //     'password' => Input::get('password')
            // ]))){
            //     return redirect()->intended('ToDo');
                

            //  }else{
            //     return redirect('login')
            //     ->withErrors(array('invalid credentials were provided'))
            //     ->withInput();
            //  }