<?php

namespace App\Http\Controllers;

use App\Models\Products_detail;
use App\Http\Requests\StoreProducts_detailRequest;
use App\Http\Requests\UpdateProducts_detailRequest;

class ProductsDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kitabAudio', [
            "title" => "Kitab Audio",
            "name" => "Fernanda Gunsan",
            "exerpt" => "Fernanda Gunsan",
            "products" => Products_detail::all()
        ]);
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
     * @param  \App\Http\Requests\StoreProducts_detailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProducts_detailRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products_detail  $products_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Products_detail $products_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products_detail  $products_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Products_detail $products_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProducts_detailRequest  $request
     * @param  \App\Models\Products_detail  $products_detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProducts_detailRequest $request, Products_detail $products_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products_detail  $products_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products_detail $products_detail)
    {
        //
    }
}
