<?php

namespace App\Http\Controllers;

use App\Models\Productoptionsize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Agentsessionhandler;
use Exception;

class ProductoptionsizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listmodelOpsSize = DB::table('productmodeloptions')
        ->join('productbrandmodels', 'productmodeloptions.modelId', '=', 'productbrandmodels.id')
        ->join('productbrands', 'productbrandmodels.brandId', '=', 'productbrands.id')
        ->join('productyears', 'productbrands.yearId', '=', 'productyears.id')
        ->select('productmodeloptions.*','productbrandmodels.model','productbrands.brand','productyears.year')
        ->get();
        return view('Admin.Products.Catalog.addSize')
        ->with('ModelOptionSize',$listmodelOpsSize);
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
            'modeloptionId' => 'required|numeric',
            'optionSize'=>'required|max:250'
        ]);
        try {
            $database_agent = new Productoptionsize;
            $database_agent->optionMId = $request->modeloptionId;
            $database_agent->size = $request->optionSize;
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
     * @param  \App\Models\Productoptionsize  $productoptionsize
     * @return \Illuminate\Http\Response
     */
    public function show(Productoptionsize $productoptionsize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productoptionsize  $productoptionsize
     * @return \Illuminate\Http\Response
     */
    public function edit(Productoptionsize $productoptionsize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productoptionsize  $productoptionsize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productoptionsize $productoptionsize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productoptionsize  $productoptionsize
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productoptionsize $productoptionsize)
    {
        //
    }
}
