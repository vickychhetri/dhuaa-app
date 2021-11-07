<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Typeproduct;
use App\Models\Productcategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Agentsessionhandler;
use Exception;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cData = Company::all();
        $pCatData = Productcategory::all();
        $pTypeData = Typeproduct::all();
        return view('Admin.Products.addProduct')
            ->with('companyData', $cData)
            ->with('categoryData', $pCatData)
            ->with('productTypeData', $pTypeData);
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
            'ProductName' => 'required|max:250',
            'CompanyId' => 'required|max:25',
            'ProductTypeId' => 'required|max:25',
            'ProductCategoryId' => 'required|max:25',
            'Size' => 'required|max:50',
            'ServDesc' => 'required|max:50',
            'Utqg' => 'required|max:50',
            'Sidewall' => 'required|max:50',
            'Maxload' => 'required|max:50',
            'Sku' => 'required|max:50',
            'WarantyMi' => 'required|max:50',
            'SpeedRating' => 'required|max:50',
             
            'ProductImage' => 'required|mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:2048'
        ]);

        try {
            $database_agent = new Product;
            $database_agent->productName = $request->ProductName;
            $database_agent->companyId = $request->CompanyId;
            $database_agent->productTypeId = $request->ProductTypeId;
            $database_agent->categoryId = $request->ProductCategoryId;
            $database_agent->tireSize = $request->Size;
            $database_agent->servDesc = $request->ServDesc;
            $database_agent->utqg = $request->Utqg;
            $database_agent->sideWall = $request->Sidewall;
            $database_agent->maxLoad = $request->Maxload;
            $database_agent->sku = $request->Sku;
            $database_agent->warantyMi = $request->WarantyMi;
            $database_agent->speedRating = $request->SpeedRating;

            //Sesion id :get | Hold Parent or session Information
            $agent = new Agentsessionhandler;
            $database_agent->parentId = $agent->getSessionId();
            //New name
            $newImageName = 'item-' . time() . '.' . $request->ProductImage->extension();

            $database_agent->productImage = $newImageName;
            $res = $database_agent->save();

            if ($res == "1") {
                //Everything done and image than move to public folder from temp
                $request->ProductImage->move(public_path('/productImages'), $newImageName);
                return redirect()->back()->with('message', 'Record added Successfully !');
            }
        } catch (QueryException $e) {
            // print($e); hide application error 
            echo "Query Exception !.";
        } catch (Exception $e) {
            echo "Exception!.";
        }
        return redirect()->back()->with('Error', 'Task Fail :: Sorry, Record not added ! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $product = Product::where('id', '=', $id)->firstOrFail();
        $cData = Company::all();
        $pCatData = Productcategory::all();
        $pTypeData = Typeproduct::all();
        return view('Admin.Products.editProduct')
        ->with('companyData', $cData)
        ->with('categoryData', $pCatData)
        ->with('productTypeData', $pTypeData)
        ->with('productInfo',$product);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'ProductName' => 'required|max:250',
            'CompanyId' => 'required|max:25',
            'ProductTypeId' => 'required|max:25',
            'ProductCategoryId' => 'required|max:25',
            'Size' => 'required|max:50',
            'ServDesc' => 'required|max:50',
            'Utqg' => 'required|max:50',
            'Sidewall' => 'required|max:50',
            'Maxload' => 'required|max:50',
            'Sku' => 'required|max:50',
            'WarantyMi' => 'required|max:50',
            'SpeedRating' => 'required|max:50',
            'ProductImage' => 'mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:2048'
        ]);

        try {
            $database_agent =Product::find($request->id);
            
            $database_agent->productName = $request->ProductName;
            $database_agent->companyId = $request->CompanyId;
            $database_agent->productTypeId = $request->ProductTypeId;
            $database_agent->categoryId = $request->ProductCategoryId;
            $database_agent->tireSize = $request->Size;
            $database_agent->servDesc = $request->ServDesc;
            $database_agent->utqg = $request->Utqg;
            $database_agent->sideWall = $request->Sidewall;
            $database_agent->maxLoad = $request->Maxload;
            $database_agent->sku = $request->Sku;
            $database_agent->warantyMi = $request->WarantyMi;
            $database_agent->speedRating = $request->SpeedRating;

            //Sesion id :get | Hold Parent or session Information
            $agent = new Agentsessionhandler;
            $database_agent->parentId = $agent->getSessionId();
            if ($request->uploadImage == "yes") {
                $fileb=public_path('productImages/').$database_agent->productImage;
                unlink($fileb);
            //Ne    w name
            $newImageName = 'item-' . time() . '.' . $request->ProductImage->extension();
            $database_agent->productImage = $newImageName;
        }
            $res = $database_agent->save();

            if ($res == "1") {
                if ($request->uploadImage == "yes") {
                //Everything done and image than move to public folder from temp
               
                $request->ProductImage->move(public_path('/productImages'), $newImageName);
                }
                return redirect()->back()->with('message', 'Record updated Successfully !');
            }
        } catch (QueryException $e) {
            // print($e); hide application error 
            echo "Query Exception !.";
        } catch (Exception $e) {
            echo "Exception!.";
        }
     return redirect()->back()->with('Error', 'Task Fail :: Sorry, Record not updated ! ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        
    }
}