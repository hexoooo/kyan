<?php

namespace App\Http\Controllers;

use App\Models\RestaurantMenu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;


class RestaurantMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $restaurant=RestaurantMenu::all();
        return view('restaurant.menu',compact('restaurant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurant.add');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validator = $request->validate(
            [
                'name'=>'required|unique:restaurant_menus',
                'price'=>'required|numeric',
                'pic'=>'required'
            ]);
            $photo_extension=$request->pic->getClientOriginalExtension();
            $photo_path=public_path('asset'.'\restaurant\images');
            $photo_name=time().'.'.$photo_extension;
            RestaurantMenu::create([
                'name'=>$request->name,
                'price'=>$request->price,
                'description'=>$request->description,
                'photo'=>$photo_name,
                
            ]);
            $request->pic->move($photo_path,$photo_name);
            
            $restaurant=RestaurantMenu::all();
            Session::flash('message', 'item added successfully !');
            Session::flash('alert-class', 'alert-success');
            return redirect(route('restaurant-menu.index'));
          
        // $request->item_name;
        // $request->item_price;
        // $request->item_description;
        // $request->pic->getClientOriginalName();
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RestaurantMenu  $restaurantMenu
     * @return \Illuminate\Http\Response
     */
    public function show(RestaurantMenu $restaurantMenu)
    {
        //
        dd('hello from show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RestaurantMenu  $restaurantMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(RestaurantMenu $restaurantMenu)
    {
        $item=$restaurantMenu;
        //
        return view('restaurant.edit',compact('item'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RestaurantMenu  $restaurantMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RestaurantMenu $restaurantMenu)
    {

        
        if(isset($request->name)){
        $restaurantMenu->name=$request->name;
        $restaurantMenu->save();
    }
        if(isset($request->price)){
        $restaurantMenu->price=$request->price;
        $restaurantMenu->save();
    }
        if(isset($request->description)){
        $restaurantMenu->description=$request->description;
        $restaurantMenu->save();
    }
        
        if(isset($request->pic)){
            $photo_extension=$request->pic->getClientOriginalExtension();
            $photo_path=public_path('asset'.'\restaurant\images');
            $photo_name=time().'.'.$photo_extension;
            File::delete($photo_path.'/'.$restaurantMenu->photo);
        $restaurantMenu->photo=$photo_name;
        $request->pic->move($photo_path,$photo_name);    
        $restaurantMenu->save();
    }
        $restaurant=RestaurantMenu::all();
        return redirect(route('restaurant-menu.index',compact('restaurant')));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RestaurantMenu  $restaurantMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(RestaurantMenu $restaurantMenu)
    {
        $file=public_path('asset/restaurant/images/'.$restaurantMenu->photo);
        file::delete($file);
        $restaurantMenu->delete();
        
        $restaurant=RestaurantMenu::all();
        return redirect(route('restaurant-menu.index',compact('restaurant')));
        //
    }
}