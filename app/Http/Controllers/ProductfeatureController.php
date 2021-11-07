<?php

namespace App\Http\Controllers;

use App\Models\Productfeature;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Agentsessionhandler;

class ProductfeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        try{
            //goal if already present update else insert
   
            if($id){
            $updateRequired= ProductfeatureController::UpdateOrInsert($id);
            if($updateRequired){
                $data=Productfeature::where('productId', '=', $id)->firstOrFail();
                return view('Admin.Products.addFeature')
                ->with('features',$data);
            }else {
                return view('Admin.Products.addFeature')
                ->with('productId',$id);
            }
            
        }else{
            return redirect('/noaccess');
        }
    }
    catch(Exception $e){
        echo "Sorry, Not Allowed.".$e;
    }

    }

    public static function UpdateOrInsert($id)
    {
        if(Productfeature::where('productId',$id)->get()->first()){
            return true;
        }
        else {
            return false;
            }
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
            'productId' => 'required',
            'Benifits' => 'required',
            'Features' => 'required',
        ]);
        try {
            $database_agent = new Productfeature;
            $database_agent->productId = $request->productId;
            $database_agent->benefits = $request->Benifits;
            $database_agent->features = $request->Features;

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
     * @param  \App\Models\Productfeature  $productfeature
     * @return \Illuminate\Http\Response
     */
    public function show(Productfeature $productfeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productfeature  $productfeature
     * @return \Illuminate\Http\Response
     */
    public function edit(Productfeature $productfeature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productfeature  $productfeature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productfeature $productfeature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productfeature  $productfeature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productfeature $productfeature)
    {
        //
    }
}
