<?php

namespace App\Http\Controllers;

use App\Models\Productyear;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Agentsessionhandler;
use Exception;
class ProductyearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('Admin.Products.Catalog.addYear');
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
            'catalogYear' => 'required|numeric'
        ]);
        try {
            $database_agent = new Productyear;
            $database_agent->year = $request->catalogYear;
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
     * @param  \App\Models\Productyear  $productyear
     * @return \Illuminate\Http\Response
     */
    public function show(Productyear $productyear)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productyear  $productyear
     * @return \Illuminate\Http\Response
     */
    public function edit(Productyear $productyear,$id)
    {
        $data=Productyear::where('id',$id)->firstorfail();
        return view("Admin.Products.Catalog.editYear")
            ->with('yearData', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productyear  $productyear
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productyear $productyear)
    {
        $request->validate([
            'catalogYear' => 'required|numeric'
        ]);
        try {
            $database_agent = Productyear::find($request->id);
            $database_agent->year = $request->catalogYear;
            //Sesion id :get
            $agent = new Agentsessionhandler;
            $database_agent->parentId = $agent->getSessionId();
            $res = $database_agent->save();
            if ($res == "1") {
                return redirect()->back()->with('message', 'Record updated Successfully !');
            }
        } catch (QueryException $e) {
            // print($e); 
            echo "Query Exception !.";
        } catch (Exception $e) {
            echo "Exception !.";
        }
        return redirect()->back()->with('Error', 'Task Fail :: Sorry, Record not updated ! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productyear  $productyear
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productyear $productyear,$id)
    {
        Productyear::where('id',$id)->firstorfail()->delete();
        return redirect("/Admin/Catalog/Years")->with('Error', 'Year Record deleted successfully. ! ');
    }
}
