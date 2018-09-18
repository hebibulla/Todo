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
     

         // Itemモデルのインスタンス化
        $md = new Items();
        // データ取得
        $data = $md->getData();

        // ビューを返す
        
    return view('home',compact('data'));
        
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
                        ->withInput();}
                        

        
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




    public function searchIndex(Request $request){

        $rls = array('search_txt' => 'required');
        //空のとき表示するエラーメッセージ
        $validator = Validator::make($request->all(),$rls);
        if ($validator->fails()) {
         return redirect('search')
                     ->withErrors(array('please input search text!'))
                     ->withInput();

     }
       $search = $request->input('search_txt');
         // 検索するテキスト取得
 

    //      if(!empty($search)) {

    //     $sdata = $table->where('item_name', 'like', '%'.$search.'%')->get();

    // } 

    // return redirect('search',compact('search'));
    echo $search;

 }

 public function goSearch(){
     
    $md = new Items();
    // データ取得
        $data = $md->getData();

    // ビューを返す
    
    return view('search',compact('data'));
     
 }
}
        