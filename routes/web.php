<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

##################################################
#    Guest section  to control website           # 
##################################################
Route::get('/', function () {
    return view('home');
});
Route::get('/index.html', function () {
    return view('home');
});
Route::get('/index', function () {
    return view('home');
});
Route::get('/about-us', function () {
    return view('aboutus');
});
 
#Contact us page access 
Route::get('/Contact-us', 'App\Http\Controllers\MessageController@index');
Route::post('/Contact-us', 'App\Http\Controllers\MessageController@store');




Route::get('/404', function () {
    return view('404');
});

Route::get('/Schedule-service', function () {
    return view('scheduleservice');
});

Route::get('/Shop', function () {
    return view('shopItem');
});

Route::get('/Roadside-Services-Onsite-Repair', function () {
    return view('Services.service1');
});
Route::get('/Truck-Trailer-Tire-Repair', function () {
    return view('Services.service2');
});

Route::get('/New-Used-Recap-Tyre-Available', function () {
    return view('Services.service3');
});






##################################################
#    Admin section  to control adminLogin        # 
##################################################

#####################################################################
#below section code is used to control the routing of the admin     #
#section : no allowed to touch this code                            #
#without taking permission from the vicky chhetri                   #
#                                                                   #
#####################################################################

// Login Access Routes 

Route::get('/adminLogin', 'App\Http\Controllers\UseradminsController@showLoginScreen');
Route::post('/adminLogin', 'App\Http\Controllers\UseradminsController@checkLogin');

// Forgot or logout session 
Route::get('/noaccess', function () {
    Session()->forget('username');
    Session()->forget('password');
    Session()->flush();
    return redirect("/adminLogin")->with('message', ' User is logged out !');
});

Route::group(["middleware" => ["UserLogChecker"]], function () {
    Route::get('/dashboard', 'App\Http\Controllers\Mydashbaord@show');
    //Company
    Route::get('/Admin/Add-Company', 'App\Http\Controllers\CompanyController@index');
    Route::post('/Admin/Add-Company', 'App\Http\Controllers\CompanyController@store');
    
    //Edit, Update & Delete Company Info 
    Route::get('/Products/EditCompany/{id}', 'App\Http\Controllers\CompanyController@edit');
    Route::post('/Products/EditCompany', 'App\Http\Controllers\CompanyController@update');
    Route::get('/Products/DeleteCompany/{id}', 'App\Http\Controllers\CompanyController@destroy');

    //Product Type
    Route::get('/Admin/Add-ProductType', 'App\Http\Controllers\TypeproductController@index');
    Route::post('/Admin/Add-ProductType', 'App\Http\Controllers\TypeproductController@store');
    //Edit Product Type 
    Route::get('/Products/EditProductType/{id}', 'App\Http\Controllers\TypeproductController@edit');
    Route::post('/Products/EditProductType', 'App\Http\Controllers\TypeproductController@update');
    
    Route::get('/Products/DeleteProductType/{id}', 'App\Http\Controllers\TypeproductController@destroy');
    
    //Product Catgories Type
    Route::get('/Admin/Add-ProductCategory', 'App\Http\Controllers\ProductcategoryController@index');
    Route::post('/Admin/Add-ProductCategory', 'App\Http\Controllers\ProductcategoryController@store');
    
    
    //Edit Product Category 
    Route::get('/Admin/Edit-ProductCategory/{id}', 'App\Http\Controllers\ProductcategoryController@edit');
    Route::post('/Admin/Edit-ProductCategory', 'App\Http\Controllers\ProductcategoryController@update');
    
    Route::get('/Admin/delete-ProductCategory/{id}', 'App\Http\Controllers\ProductcategoryController@destroy');
   
##################################################
#   Add Products Routes : VICKY CHHETRI          # 
##################################################
// Add Product Page
Route::get('/Admin/Add-Product-Info', 'App\Http\Controllers\ProductController@index');
Route::post('/Admin/Add-Product-Info', 'App\Http\Controllers\ProductController@store');


});
