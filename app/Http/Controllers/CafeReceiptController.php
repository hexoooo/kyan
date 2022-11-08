<?php

namespace App\Http\Controllers;

use App\Models\CafeReceipt;
use Illuminate\Http\Request;

class CafeReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $receipts=CafeReceipt::all();
        return view('cafe.receipts',compact('receipts'));
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
     * @param  \App\Models\CafeReceipt  $cafeReceipt
     * @return \Illuminate\Http\Response
     */
    public function show(CafeReceipt $cafeReceipt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CafeReceipt  $cafeReceipt
     * @return \Illuminate\Http\Response
     */
    public function edit(CafeReceipt $cafeReceipt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CafeReceipt  $cafeReceipt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CafeReceipt $cafeReceipt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CafeReceipt  $cafeReceipt
     * @return \Illuminate\Http\Response
     */
    public function destroy(CafeReceipt $cafeReceipt)
    {
        //
    }
}
