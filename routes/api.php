<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteinfoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductListController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// api to show the number of times the site has been visited
//visitor visit data
Route::get('/getvisitor',[VisitorsController::class, 'Details']);


//contact route
Route::POST('/getcontact',[ContactController::class, 'Contacts']);


//site info
Route::get('/siteinfo',[SiteinfoController::class, 'AllSite']);

//category
Route::get('/categories',[CategoryController::class, 'Allcategory']);


//product by remarks
Route::get('/Productsbyremark/{remark}',[ProductListController::class, 'AllProductsremark']);

//by category
Route::get('/Productsbycategory/{category}',[ProductListController::class, 'AllProductscategory']);

//sub category
Route::get('/Productsbysubcategory/{category}/{sub_category}',[ProductListController::class, 'AllProductssubcategory']);
