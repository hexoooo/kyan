<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CafeMenu;
use App\Models\RestaurantMenu;

class MainHomeController extends Controller
{
    public function index ()
    {
        $items=RestaurantMenu::all()->take(10);
        return view('site.index',compact('items'));
        
    }
    public function menu ()
    {
        $items=RestaurantMenu::all();
        return view('site.menu',compact('items'));
    }
    //
    public function message ()
    {
    dd('hello') ;     
    }
}
