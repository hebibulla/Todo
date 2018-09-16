<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Sidebar;


class AboutController extends Controller
{
    //display the about page.
    
    public function index(){
        // $sidebar = Sidebar::all();

        $items = Auth::user()->items;

        return view('ToDo',array(
            'items' => $items
        ));
    }
}
