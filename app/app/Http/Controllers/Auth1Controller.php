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
use Hash;      

class AuthController extends Controller
{
    //getlogin

    public function getLogin(){
        return View('login1');
    }





                     //Post の処理
    public function postLogin(Request $request){
        
        $rules = array('username'=> 'required','password'=> 'required');
        $validator = Validator::make($request->all(),$rules);
        // $validator = Validator::make(Input::all(),$rules);             
        
        

        if ($validator->fails()) {
            return redirect('login1')
                        ->withErrors($validator)
                        ->withInput();
        
        }
        // $name = Input::get('username');
        // $password = Input::get('password');

        $name = $request->name;
        $password = $request->password;

        $credentials = $request->only('name', 'password');


        if (Auth::attempt($credentials)) {
            // 認証に成功した
            // return redirect()->intended();
            print_r($name);
        }else{
            echo "damm!";
        }
        // $auth = Login::attempt(array(
        //     'name' => $name,
        //     'password' => $password
        //     ),true);

        //     if(!$auth){
        //         echo "opps";
        //     }


        // if (Auth::guard('admin')->attempt(['name' => $name, 'password' => $password] , $request->remember))
        // {
        //     // $u = User::where('name', $name)->first();
        //     // Auth::loginUsingId($u->id);
        //     return redirect('/');
        // }
        // return redirect()->back();
        // echo "opps";
        // }





                


        //     }else{
        //         return redirect('/');
        //     }
        // print_r($name);
        // print_r($password);
        // $p = User::where('name',$name)->where("password",$password)->get();
        // print_r($p->toArray());
            

    }
}

// if (Auth::attempt([ )) {
//     // 認証に成功した
//     return redirect()->intended('dashboard')


















                

            //  }else{
            //     return redirect('login')
            //     ->withErrors(array('invalid credentials were provided'))
            //     ->withInput();
            //  }