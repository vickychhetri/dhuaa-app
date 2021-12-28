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
    public function index(Request $request)
    {
        $SIZE=$request->sizeOption;
        
        $notListedProducts = DB::table('products')
        ->leftJoin('catlogproducts', 'products.id', '=', 'catlogproducts.productId')
        ->whereNull('catlogproducts.productId')
        ->where('catlogproducts.catalogSizeId','=',$request->sizeOption)
        ->select('products.*')
        ->get();

         print_r($notListedProducts);
        
        $listedProducts = DB::table('products')
        ->join('catlogproducts', 'products.id', '=', 'catlogproducts.productId')
        ->join('productoptionsizes', 'catlogproducts.catalogSizeId', '=', 'productoptionsizes.id')
        ->where('productoptionsizes.id','=',$request->sizeOption)
        ->select('products.*')
        ->get();

    }
    public function indexhome()
    {

        $listmodeloptionsize = DB::table('productoptionsizes')
        ->join('productmodeloptions', 'productoptionsizes.optionMId', '=', 'productmodeloptions.id')
        ->join('productbrandmodels', 'productmodeloptions.modelId', '=', 'productbrandmodels.id')
        ->join('productbrands', 'productbrandmodels.brandId', '=', 'productbrands.id')
        ->join('productyears', 'productbrands.yearId', '=', 'productyears.id')
        ->select('productoptionsizes.*','productmodeloptions.optionM','productbrandmodels.model','productbrands.brand','productyears.year')
        ->get();
        return view('Admin.Products.Catalog.catlogListing')
        ->with('ModelOptionSize',$listmodeloptionsize);
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