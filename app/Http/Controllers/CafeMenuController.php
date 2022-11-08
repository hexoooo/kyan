<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Models\CafeMenu;
use Illuminate\Http\Request;


class CafeMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cafe=CafeMenu::all();
        return view('cafe.menu',compact('cafe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cafe.add');
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
                'name'=>'required|unique:cafe_menus',
                'price'=>'required|numeric',
                'pic'=>'required'
            ]);
            $photo_extension=$request->pic->getClientOriginalExtension();
            $photo_path=public_path('asset'.'\cafe\images');
            $photo_name=time().'.'.$photo_extension;
            CafeMenu::create([
                'name'=>$request->name,
                'price'=>$request->price,
                'description'=>$request->description,
                'photo'=>$photo_name,
                
            ]);
            $request->pic->move($photo_path,$photo_name);
            
            $cafe=CafeMenu::all();
            Session::flash('message', 'item added successfully !');
            Session::flash('alert-class', 'alert-success');
            return redirect(route('cafe-menu.index'));
          
        // $request->item_name;
        // $request->item_price;
        // $request->item_description;
        // $request->pic->getClientOriginalName();
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cafeMenu  $cafeMenu
     * @return \Illuminate\Http\Response
     */
    public function show(cafeMenu $cafeMenu)
    {
        //
        dd('hello from show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cafeMenu  $cafeMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(cafeMenu $cafeMenu)
    {
        $item=$cafeMenu;
        //
        return view('cafe.edit',compact('item'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cafeMenu  $cafeMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cafeMenu $cafeMenu)
    {

        
        if(isset($request->name)){
        $cafeMenu->name=$request->name;
        $cafeMenu->save();
    }
        if(isset($request->price)){
        $cafeMenu->price=$request->price;
        $cafeMenu->save();
    }
        if(isset($request->description)){
        $cafeMenu->description=$request->description;
        $cafeMenu->save();
    }
        
        if(isset($request->pic)){
            $photo_extension=$request->pic->getClientOriginalExtension();
            $photo_path=public_path('asset'.'\cafe\images');
            $photo_name=time().'.'.$photo_extension;
            File::delete($photo_path.'/'.$cafeMenu->photo);
        $cafeMenu->photo=$photo_name;
        $request->pic->move($photo_path,$photo_name);    
        $cafeMenu->save();
    }
        $cafe=CafeMenu::all();
        return redirect(route('cafe-menu.index',compact('cafe')));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cafeMenu  $cafeMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(cafeMenu $cafeMenu)
    {
        $file=public_path('asset/cafe/images/'.$cafeMenu->photo);
        file::delete($file);
        $cafeMenu->delete();
        
        $cafe=CafeMenu::all();
        return redirect(route('cafe-menu.index',compact('cafe')));
        //
    }
}
