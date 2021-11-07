<?php

namespace App\Http\Controllers;

use App\Models\Addtionalspecification;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Database\QueryException;

class AddtionalspecificationController extends Controller
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
        $updateRequired= AddtionalspecificationController::UpdateOrInsert($id);
        if($updateRequired){
            $data=Addtionalspecification::where('productId', '=', $id)->firstOrFail();
            return view('Admin.Products.addProductSpecification')
            ->with('spcifications',$data);
        } 
        return view('Admin.Products.addProductSpecification')
        ->with('productId',$id);
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
        if(Addtionalspecification::where('productId',$id)->get()->first()){
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
    'productIdentification' => 'required',
    'maxInflation' => 'required|max:250',
    'maxLoadDual' => 'required|max:250',
    'revsPerMile' => 'required|max:250',
    'treadDepth' => 'required|max:250',
    'weight' => 'required|max:250',
    'plyRating' => 'required|max:250',
    'rimWidth' => 'required|max:250',
    'sectionWidth' => 'required|max:250',
    'treadWidth' => 'required|max:250',
    'diameter' => 'required|max:250',
            ]);
        try {
    $database_agent = new Addtionalspecification;
    $database_agent->productId = $request->productIdentification;
    $database_agent->diameter = $request->diameter;
    $database_agent->maxInflation = $request->maxInflation;
    $database_agent->maxLoadDual = $request->maxLoadDual;
    $database_agent->revsPerMile = $request->revsPerMile;
    $database_agent->treadDepth = $request->treadDepth;
    $database_agent->weight = $request->weight;
    $database_agent->plyRating = $request->plyRating;
    $database_agent->rimWidth = $request->rimWidth;
    $database_agent->sectionWidth = $request->sectionWidth;
    $database_agent->treadWidth = $request->treadWidth;
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
     * @param  \App\Models\Addtionalspecification  $addtionalspecification
     * @return \Illuminate\Http\Response
     */
    public function show(Addtionalspecification $addtionalspecification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Addtionalspecification  $addtionalspecification
     * @return \Illuminate\Http\Response
     */
    public function edit(Addtionalspecification $addtionalspecification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Addtionalspecification  $addtionalspecification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Addtionalspecification $addtionalspecification)
    {
        $request->validate([
            'productIdentification' => 'required',
            'maxInflation' => 'required|max:250',
            'maxLoadDual' => 'required|max:250',
            'revsPerMile' => 'required|max:250',
            'treadDepth' => 'required|max:250',
            'weight' => 'required|max:250',
            'plyRating' => 'required|max:250',
            'rimWidth' => 'required|max:250',
            'sectionWidth' => 'required|max:250',
            'treadWidth' => 'required|max:250',
            'diameter' => 'required|max:250',
                    ]);
                try {
            $database_agent = Addtionalspecification::find($request->productIdentification);
            $database_agent->productId = $request->productIdentification;
            $database_agent->diameter = $request->diameter;
            $database_agent->maxInflation = $request->maxInflation;
            $database_agent->maxLoadDual = $request->maxLoadDual;
            $database_agent->revsPerMile = $request->revsPerMile;
            $database_agent->treadDepth = $request->treadDepth;
            $database_agent->weight = $request->weight;
            $database_agent->plyRating = $request->plyRating;
            $database_agent->rimWidth = $request->rimWidth;
            $database_agent->sectionWidth = $request->sectionWidth;
            $database_agent->treadWidth = $request->treadWidth;

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
     * @param  \App\Models\Addtionalspecification  $addtionalspecification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addtionalspecification $addtionalspecification,$id)
    {
        Addtionalspecification::where('id', $id)->firstorfail()->delete();
        return redirect()->back()->with('Error', 'User Record deleted successfully. ! ');
    }
}