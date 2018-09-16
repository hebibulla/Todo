<?php

namespace App;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;
use App;

class Items extends Model
{
    //データ取得メソッド
    protected $table = 'items';
    protected $fillable = ['name'];
    protected $guarded = array('id');
    // public $timestamps = fales;
    

    public function getData(){
        $data = DB::table($this->table)->get();
        
        return $data;      
    }
}
