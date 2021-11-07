<?php

namespace App\Http\Controllers;

use App\Models\Typeproduct;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Agentsessionhandler;
use Exception;

class TypeproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Products.addProductType');
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
            'TypeProduct' => 'required|max:100',
            'Description' => 'required|max:255',
        ]);
        try {
            $database_agent = new Typeproduct;
            $database_agent->typeName = $request->TypeProduct;
            $database_agent->description = $request->Description;

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
     * @param  \App\Models\Typeproduct  $typeproduct
     * @return \Illuminate\Http\Response
     */
    public function show(Typeproduct $typeproduct)
    {
        //
    }

    public function editStep1()
    {
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typeproduct  $typeproduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Typeproduct $typeproduct, $id)
    {
        $pdata = Typeproduct::where('id', '=', $id)->firstOrFail();
        return view("Admin.Products.editProductType")
            ->with('pdata', $pdata);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Typeproduct  $typeproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Typeproduct $typeproduct)
    {
        $request->validate([
            'TypeProduct' => 'required|max:100',
            'Description' => 'required|max:255',
        ]);
        try {
            $database_agent = Typeproduct::find($request->id);
            $database_agent->typeName = $request->TypeProduct;
            $database_agent->description = $request->Description;

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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typeproduct  $typeproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typeproduct $typeproduct,$id)
    { 
        Typeproduct::where('id',$id)->firstorfail()->delete();
        return redirect("/Admin/Add-ProductType")->with('Error', 'User Record deleted successfully. ! ');
    }
}
