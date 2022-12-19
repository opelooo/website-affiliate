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
        return view('rekomendasiAudio', [
            "title" => "Rekomendasi Audio",
            "name" => "Opelooo",
            "slug" => "rekomen-audio",
            "products" => Products_detail::all()
        ]);
    }
    private function productsView(String $title, String $slug){
        return view('blogs.section-products', [
            "title" => $title,
            "name" => "Opelooo",
            "slug" => $slug,
            "products" => Products_detail::all()
        ]);
    }
    public function tws(){
        $title = "TWS";
        $slug = "section-tws";

        return $this->productsView($title, $slug);

    }
    public function headset(){
        $title = "Headset";
        $slug = "section-headset";

        return $this->productsView($title, $slug);

    }
    public function headphone(){
        $title = "Wreless Headphone";
        $slug = "section-headphone";

        return $this->productsView($title, $slug);
    }
    public function speaker(){
        $title = "Speaker";
        $slug = "section-speaker";

        return $this->productsView($title, $slug);
    }
    public function soundcard(){
        $title = "Sound Card";
        $slug = "section-headset";

        return $this->productsView($title, $slug);
    }
    public function kable(){
        $title = "Kable";
        $slug = "section-kable";

        return $this->productsView($title, $slug);
    }
    public function iem(){
        $title = "IEM";
        $slug = "section-iem";

        return $this->productsView($title, $slug);
    }
    public function dac(){
        $title = "DAC";
        $slug = "section-dac";

        return $this->productsView($title, $slug);
    }
    public function mic(){
        $title = "Mic";
        $slug = "section-mic";

        return $this->productsView($title, $slug);
    }
    public function eartips(){
        $title = "Eartips";
        $slug = "section-eartips";

        return $this->productsView($title, $slug);
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
        //
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

    }

    public function getByitemID($itemID) {
        return Products_detail::find($itemID);
    }
}
