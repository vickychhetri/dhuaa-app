<?php

namespace App\Http\Controllers;

use App\Models\Productbrandmodel;
use Illuminate\Http\Request;
// use App\Models\Productyear;
use App\Models\Productbrand;
use Illuminate\Support\Facades\DB;


class ProductbrandmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $brands=Productbrand::all();
        
        $listbrands = DB::table('productbrands')
        ->join('productyears', 'productbrands.yearId', '=', 'productyears.id')
        ->select('productbrands.*','productyears.*')
        ->get();

        return view('Admin.Products.Catalog.addModel')
        ->with('BRANDS',$listbrands);
        
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
     * @param  \App\Models\Productbrandmodel  $productbrandmodel
     * @return \Illuminate\Http\Response
     */
    public function show(Productbrandmodel $productbrandmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productbrandmodel  $productbrandmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Productbrandmodel $productbrandmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productbrandmodel  $productbrandmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productbrandmodel $productbrandmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productbrandmodel  $productbrandmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productbrandmodel $productbrandmodel)
    {
        //
    }
}
