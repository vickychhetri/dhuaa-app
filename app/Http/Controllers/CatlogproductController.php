<?php

namespace App\Http\Controllers;

use App\Models\Catlogproduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Agentsessionhandler;
use Exception;

class CatlogproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ID=$request->sizeOption;
        $SIZE = DB::table('productoptionsizes')
        ->where('productoptionsizes.id','=',$ID)
        ->select('productoptionsizes.size')
        ->get()
        ->first();

        $notListedProducts = DB::table('products')
        ->leftJoin('catlogproducts', 'products.id', '=', 'catlogproducts.productId')
        ->whereNull('catlogproducts.productId')
        ->select('products.*')
        ->get();
        $listedProducts = DB::table('products')
        ->join('catlogproducts', 'products.id', '=', 'catlogproducts.productId')
        ->join('productoptionsizes', 'catlogproducts.catalogSizeId', '=', 'productoptionsizes.id')
        ->where('productoptionsizes.id','=',$ID)
        ->select('products.*')
        ->get();

        return view('Admin.Products.Catalog.catalogSizeList')
        ->with('listedProducts',$listedProducts)
        ->with('SIZE',$SIZE->size)
        ->with('ID',$ID)
        ->with('notListedProducts',$notListedProducts);
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

    public function moveProductToCatalog(){

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
        $request->validate([
            'productId' => 'required|numeric',
            'sizeId'=>'required|numeric'
        ]);
        try {
            $database_agent = new Catlogproduct;
            $database_agent->productId = $request->productId;
            $database_agent->catalogSizeId = $request->sizeId;
            //Sesion id :get
            $agent = new Agentsessionhandler;
            $database_agent->parentId = $agent->getSessionId();
            $res = $database_agent->save();
            if ($res == "1") {
                return redirect()->back()->with('message', 'Record added Successfully !');
            }
        } catch (QueryException $e) {
            // print($e); 
            echo "Query Exception !.";
        } catch (Exception $e) {
            echo "Exception !.";
        }
        return redirect()->back()->with('Error', 'Task Fail :: Sorry, Record not added ! ');
      
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