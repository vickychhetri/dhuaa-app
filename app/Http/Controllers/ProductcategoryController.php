<?php

namespace App\Http\Controllers;

use App\Models\Productcategory;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Agentsessionhandler;
use Exception;
class ProductcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Products.addProductCategory');
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
            'TypeCategory' => 'required|max:100',
            'Description' => 'required|max:255',
        ]);
        try {
            $database_agent = new Productcategory;
            $database_agent->category = $request->TypeCategory;
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
     * @param  \App\Models\Productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Productcategory $productcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Productcategory $productcategory,$id)
    {
        $categorydata = Productcategory::where('id', '=', $id)->firstOrFail();
        return view("Admin.Products.editCategory")
            ->with('categorydata', $categorydata);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productcategory $productcategory)
    {
        $request->validate([
            'TypeCategory' => 'required|max:100',
            'Description' => 'required|max:255',
        ]);
        try {
            $database_agent = Productcategory::find($request->id);;
            $database_agent->category = $request->TypeCategory;
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
     * @param  \App\Models\Productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productcategory $productcategory,$id)
    {
        Productcategory::where('id',$id)->firstorfail()->delete();
        return redirect("/Admin/Add-ProductCategory")->with('Error', 'User Record deleted successfully. ! ');
    }
}
