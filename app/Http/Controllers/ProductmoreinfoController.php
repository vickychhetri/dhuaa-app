<?php

namespace App\Http\Controllers;

use App\Models\Productmoreinfo;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Agentsessionhandler;
use Exception;

class ProductmoreinfoController extends Controller
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
            $updateRequired= ProductmoreinfoController::UpdateOrInsert($id);
            if($updateRequired){
                $data=Productmoreinfo::where('productId', '=', $id)->firstOrFail();
                return view('Admin.Products.addMoreInfo')
                ->with('addtional',$data);
            }else {
                return view('Admin.Products.addMoreInfo')
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
        if(Productmoreinfo::where('productId',$id)->get()->first()){
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
            'MoreInformation' => 'required',
        ]);
        try {
            $database_agent = new Productmoreinfo;
            $database_agent->productId = $request->productId;
            //Future Upgradation
            $database_agent->typeofContent = "1";
            $database_agent->typeofContentValue = $request->MoreInformation;

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
     * @param  \App\Models\Productmoreinfo  $productmoreinfo
     * @return \Illuminate\Http\Response
     */
    public function show(Productmoreinfo $productmoreinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productmoreinfo  $productmoreinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Productmoreinfo $productmoreinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productmoreinfo  $productmoreinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productmoreinfo $productmoreinfo)
    {
        $request->validate([
            'id' => 'required',
            'MoreInformation' => 'required',
        ]);
        try {
            $database_agent = Productmoreinfo::find($request->id);
            //Future Upgradation
            $database_agent->typeofContentValue = $request->MoreInformation;

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
     * @param  \App\Models\Productmoreinfo  $productmoreinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productmoreinfo $productmoreinfo)
    {
        //
    }
}
