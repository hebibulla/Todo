<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sidebar;


class AboutController extends Controller
{
    //display the about page.
    
    public function index(){
        // $sidebar = Sidebar::all();
        return view('ToDo',compact(["sidebar"]));
    }
}
