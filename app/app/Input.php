<?php

namespace App;
use Illuminate\Support\Facades\DB;
use App\Items;
use Illuminate\Database\Eloquent\Model;
use App;

class Input extends Model{

    
    protected $table = 'items';



    public function mark(){

        $this->$done = $this->done ? fales:true;

        
    }


}

