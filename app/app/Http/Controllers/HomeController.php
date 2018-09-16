<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use Input;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


         // Itemモデルのインスタンス化
    $md = new Items();
        // データ取得
    $data = $md->getData();

        // ビューを返す
        
    return view('home',compact('data'));
        // return view('sample.model');
        
    }
    public function postIndex(Request $request){

        // $id = Input::get('id');

    
        // return view('sample.model');
        echo "okay";
    }


}
