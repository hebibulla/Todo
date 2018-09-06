<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
    //
    protected $table ='sidebars';
    //
    protected $fillable = ['name','icon','created_at','updated_at'];
}
