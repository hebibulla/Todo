<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Items;
use App\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

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
        //ログイン状態のユーザーid取得
        $id = Auth::id();


         // Itemモデルのインスタンス化
        $md = new Items();
        // データ取得
        $data = $md->getData();

        // ビューを返す
        
    return view('home',compact('data'));
        // return view('sample.model');
        
    }
    public function postIndex(Request $request){
         //ログイン状態のユーザーid取得
        $owner_id = Auth::id();
 
        //modelのインスタンス
        $post = new Input();
        //formから取得したデータを整理
        $list_id = $request->input('checkBox');
        
        
        $table = DB::table('items');

        
        
        if(isset($list_id)){
            foreach($list_id as $val){

                $table->where('id','=',$val)->update(['done'=>1]);
            }
            
        }else{
            $table->update(['done'=>0]);;
            
            return redirect('/'); 
            
        
            
            
                
        }
        
        return redirect('/');  
        
        
        
            
        
        
    }

    public function getNew(){
        return view('new');
    }
    public function postNew(Request $request){

        $rules = array('item_name' => 'required|min:3|max:225');

        //空のとき表示するエラーメッセージ
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return redirect('new')
                        ->withErrors(array('please input new ToDo!!!'))
                        ->withInput();
                        

        }
        //ログイン状態のユーザーid取得
        $owner_id = Auth::id();
        
        //modelのインスタンス
        $post = new Input();
        //formから取得したデータを整理
        $post->owner_id = $owner_id;
        $post->done = 0;
        $post->item_name = $request->item_name;
        $post->save();

        return redirect('/');
    }



    public function getDelete($task){
        
        $table = DB::table('items');
        $delete = $table->where('id','=',$task)->delete();

        return redirect('/');
        
    }
}
