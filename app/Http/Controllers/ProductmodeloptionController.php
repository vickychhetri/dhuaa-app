<?php

namespace App\Http\Controllers;

use App\Models\Productmodeloption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Agentsessionhandler;
use Exception;
class ProductmodeloptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listmodelOps = DB::table('productbrandmodels')
        ->join('productbrands', 'productbrandmodels.brandId', '=', 'productbrands.id')
        ->join('productyears', 'productbrands.yearId', '=', 'productyears.id')
        ->select('productbrandmodels.*','productbrands.*','productyears.year')
        ->get();
        return view('Admin.Products.Catalog.addModelOption')
        ->with('ModelOption',$listmodelOps);
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
        print_r($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productmodeloption  $productmodeloption
     * @return \Illuminate\Http\Response
     */
    public function show(Productmodeloption $productmodeloption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productmodeloption  $productmodeloption
     * @return \Illuminate\Http\Response
     */
    public function edit(Productmodeloption $productmodeloption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productmodeloption  $productmodeloption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productmodeloption $productmodeloption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productmodeloption  $productmodeloption
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productmodeloption $productmodeloption)
    {
        //
    }
}
