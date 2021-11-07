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

Route::get('/tmp', function () {
    return view('Template.template1');
});



// Page Template 
Route::get('/View/{id}','App\Http\Controllers\UserpageController@showpage');
// Page Template 
Route::get('/Service/{id}','App\Http\Controllers\UserpageController@showpage');

// Page Template 
Route::get('/Blog/{id}','App\Http\Controllers\UserpageController@showpage');

//List Blogs
Route::get('/Blogs','App\Http\Controllers\Handleblog@showbloglist');

//List Blogs
Route::get('/Services','App\Http\Controllers\Handleblog@showservicelist');




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


Route::get('/Admin/Edit-Product-Info/{id}', 'App\Http\Controllers\ProductController@Edit');
Route::post('/Admin/Edit-Product-Info', 'App\Http\Controllers\ProductController@update');

//pending : ok
Route::get('/Admin/Delete-Product/{id}', 'App\Http\Controllers\ProductController@destroy');
 //Specification of the products
Route::get('/Admin/Product/Addtional-Specification/{id}', 'App\Http\Controllers\AddtionalspecificationController@index');
Route::post('/Admin/Product/AAddtional-Specification', 'App\Http\Controllers\AddtionalspecificationController@store');
Route::post('/Admin/Product/EAddtional-Specification', 'App\Http\Controllers\AddtionalspecificationController@update');
//delete the specification of the product
Route::get('/Admin/Product/Delete-Addtional-Specification/{id}', 'App\Http\Controllers\AddtionalspecificationController@destroy');

//Fetures and benifit of the product
Route::get('/Admin/Product/FeaturesBenifits/{id}', 'App\Http\Controllers\ProductfeatureController@index');
Route::post('/Admin/Product/FeaturesBenifits', 'App\Http\Controllers\ProductfeatureController@store');


##############################################################
#   Create New Dynamic Pages Routes : VICKY CHHETRI          # 
##############################################################
// Add Product Page
Route::get('/Admin/Add-New-Pages', 'App\Http\Controllers\UserpageController@index');
Route::post('/Admin/Add-New-Pages', 'App\Http\Controllers\UserpageController@store');
Route::post('/upload', 'App\Http\Controllers\UserpageController@upload');

//Edit Page Routes

Route::get('/Admin/List-Pages', 'App\Http\Controllers\UserpageController@showlist');

//Edit Page 
Route::get('/Pages/EditPage/{id}', 'App\Http\Controllers\UserpageController@edit');
Route::post('/Pages/EditPage/', 'App\Http\Controllers\UserpageController@update');
Route::get('/Pages/DeletePage/{id}', 'App\Http\Controllers\UserpageController@destroy');

});
