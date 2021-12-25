<?php

namespace App\Http\Controllers;

use App\Models\Productbrand;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Agentsessionhandler;
use Exception;
use App\Models\Productyear;

class ProductbrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years=Productyear::all();
        return view('Admin.Products.Catalog.addBrand')
        ->with('YEARS',$years);
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
            'Year' => 'required|numeric',
            'brandName'=>'required|max:250'
        ]);
        try {
            $database_agent = new Productbrand;
            $database_agent->yearId = $request->Year;
            $database_agent->brand = $request->brandName;
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
        // return redirect()->back()->with('Error', 'Task Fail :: Sorry, Record not added ! ');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productbrand  $productbrand
     * @return \Illuminate\Http\Response
     */
    public function show(Productbrand $productbrand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productbrand  $productbrand
     * @return \Illuminate\Http\Response
     */
    public function edit(Productbrand $productbrand,$id)
    {
        $data=Productbrand::where('id',$id)->firstorfail();
        return view("Admin.Products.Catalog.editBrand")
            ->with('Brand', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productbrand  $productbrand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productbrand $productbrand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productbrand  $productbrand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productbrand $productbrand)
    {
        //
    }
}
