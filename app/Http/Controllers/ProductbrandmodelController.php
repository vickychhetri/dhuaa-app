<?php

namespace App\Http\Controllers;

use App\Models\Productbrandmodel;
use Illuminate\Http\Request;
// use App\Models\Productyear;
use App\Models\Productbrand;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Agentsessionhandler;
use Exception;

class ProductbrandmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listbrands = DB::table('productbrands')
        ->join('productyears', 'productbrands.yearId', '=', 'productyears.id')
        ->select('productbrands.*','productyears.year')
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
        $request->validate([
            'brandId' => 'required|numeric',
            'modelName'=>'required|max:250'
        ]);
        try {
            $database_agent = new Productbrandmodel;
            $database_agent->brandId = $request->brandId;
            $database_agent->model = $request->modelName;
            //Sesion id :get
            $agent = new Agentsessionhandler;
            $database_agent->parentId = $agent->getSessionId();
            $res = $database_agent->save();
            if ($res == "1") {
                return redirect()->back()->with('message', 'Record added Successfully !');
            }
        } catch (QueryException $e) {
            // print($e); 
            echo "Query Exception !.".$e;
        } catch (Exception $e) {
            echo "Exception !.".$e;
        }
        //  return redirect()->back()->with('Error', 'Task Fail :: Sorry, Record not added ! ');
       
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
