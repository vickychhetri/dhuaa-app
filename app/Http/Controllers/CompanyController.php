<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Agentsessionhandler;
use Exception;

class CompanyController extends Controller
{
    /***
     * Company id to name revert method
     */
    public function getCompanyName($id){
        $data= Company::where('id', '=', $id)->firstOrFail();
        if($data){
            return $data->companyName;
        }
        else {
            return -1;
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Products.addCompany');
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
            'CompanyName' => 'required|max:150',
            'Description' => 'required|max:250',
            'TypeCompany' => 'required|max:150',
            'Country' => 'required|max:150',
            'CompanyLogo' => 'required|mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:2048'
        ]);
        try {
            $database_agent = new Company;
            $database_agent->companyName = $request->CompanyName;
            $database_agent->description = $request->Description;
            $database_agent->typeCompany = $request->TypeCompany;

            $database_agent->country = $request->Country;
            echo $request->CompanyLogo;
            //Sesion id :get
            $agent = new Agentsessionhandler;
            $database_agent->parentId = $agent->getSessionId();
            //New name
            $newImageName = 'company-' . time() . '.' . $request->CompanyLogo->extension();

            $database_agent->logo = $newImageName;
            $res = $database_agent->save();

            if ($res == "1") {
                $request->CompanyLogo->move(public_path('/companyImages'), $newImageName);
                return redirect()->back()->with('message', 'Record added Successfully !');
            }
        } catch (QueryException $e) {
            // print($e); 
            echo "Query Exception !.";
        } catch (Exception $e) {
            echo "Exception!.";
        }
        return redirect()->back()->with('Error', 'Task Fail :: Sorry, Record not added ! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company, $id)
    {
        $cdata = Company::where('id', '=', $id)->firstOrFail();
        return view("Admin.Products.editCompany")
            ->with('cdata', $cdata);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'CompanyName' => 'required|max:150',
            'Description' => 'required|max:250',
            'TypeCompany' => 'required|max:150',
            'Country' => 'required|max:150',
            'CompanyLogo' => 'mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:2048'
        ]);
        try {
            $database_agent =Company::find($request->id);;
            $database_agent->companyName = $request->CompanyName;
            $database_agent->description = $request->Description;
            $database_agent->typeCompany = $request->TypeCompany;

            $database_agent->country = $request->Country;
            echo $request->CompanyLogo;
            //Sesion id :get
            $agent = new Agentsessionhandler;
            $database_agent->parentId = $agent->getSessionId();
            if ($request->Doyouwantochangeimage == "yes") {
                //New name
                $newImageName = 'company-' . time() . '.' . $request->CompanyLogo->extension();
                $database_agent->logo = $newImageName;
            } 

            $res = $database_agent->save();

            if ($res == "1") {
                if ($request->Doyouwantochangeimage == "yes") {
                    $request->CompanyLogo->move(public_path('/companyImages'), $newImageName);
                }
               
            return redirect()->back()->with('message', 'Record updated Successfully !');
            }
        } catch (QueryException $e) {
            // print($e); 
            echo "Query Exception !.";
        } catch (Exception $e) {
            echo "Exception!.";
        }
        return redirect()->back()->with('Error', 'Task Fail :: Sorry, Record not added ! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company, $id)
    {
        Company::where('id', $id)->firstorfail()->delete();
        return redirect()->back()->with('Error', 'User Record deleted successfully. ! ');
    }
}
