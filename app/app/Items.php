<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App;

class Items extends Model
{
    //データ取得メソッド
    protected $table = 'items';
    protected $fillable = ['done','item_name'];
    protected $guarded = array('id','owner_id');
    

   

    public function getData(){
        //ログイン状態のユーザーid取得
        $user_id = Auth::id();

        $data = DB::table($this->table)->where('owner_id','=', $user_id )->get();
        
        return $data;      
    }

}
