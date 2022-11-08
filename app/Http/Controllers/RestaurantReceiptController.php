<?php

namespace App\Http\Controllers;

use App\Models\RestaurantReceipt;
use Illuminate\Http\Request;
use Cart;


class RestaurantReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $receipts=RestaurantReceipt::all();
        return view('restaurant.receipts',compact('receipts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RestaurantReceipt  $restaurantReceipt
     * @return \Illuminate\Http\Response
     */
    public function show(RestaurantReceipt $restaurantReceipt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RestaurantReceipt  $restaurantReceipt
     * @return \Illuminate\Http\Response
     */
    public function edit(RestaurantReceipt $restaurantReceipt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RestaurantReceipt  $restaurantReceipt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RestaurantReceipt $restaurantReceipt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RestaurantReceipt  $restaurantReceipt
     * @return \Illuminate\Http\Response
     */
    public function destroy(RestaurantReceipt $restaurantReceipt)
    {
        //
    }
}
