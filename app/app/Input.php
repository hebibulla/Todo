<?php

namespace App;
use Illuminate\Support\Facades\DB;
use App\Items;
use Illuminate\Database\Eloquent\Model;
use App;

class Input extends Model{
/**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'items';
    protected $guarded = [];



    public function mark(){

         $done = $this->done ? '0' : '1';
         $this->done = $done;
         $this->save();

        
    }


}

