<?php

namespace App\Http\Controllers;

use App\Models\Catlogproduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatlogproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notListedProducts = DB::table('products')
        ->select('products.*')
        ->get();

        
        $listedProducts = DB::table('products')
        ->join('catlogproducts', 'products.id', '=', 'catlogproducts.productId')
        ->select('products.*')
        ->get();

        print_r($notListedProducts);
        print_r($listedProducts);
        // $this->listmodeloptionsize = DB::table('productoptionsizes')
        // ->join('productmodeloptions', 'productoptionsizes.optionMId', '=', 'productmodeloptions.id')
        // ->join('productbrandmodels', 'productmodeloptions.modelId', '=', 'productbrandmodels.id')
        // ->join('productbrands', 'productbrandmodels.brandId', '=', 'productbrands.id')
        // ->join('productyears', 'productbrands.yearId', '=', 'productyears.id')
        // ->select('productoptionsizes.*','productmodeloptions.optionM','productbrandmodels.model','productbrands.brand','productyears.year')
        // ->get();
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
     * @param  \App\Models\Catlogproduct  $catlogproduct
     * @return \Illuminate\Http\Response
     */
    public function show(Catlogproduct $catlogproduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catlogproduct  $catlogproduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Catlogproduct $catlogproduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catlogproduct  $catlogproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catlogproduct $catlogproduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catlogproduct  $catlogproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catlogproduct $catlogproduct)
    {
        //
    }
}