<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteinfoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductListController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductDeController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\ForgetController;
use App\Http\Controllers\User\ResetController;
use App\Http\Controllers\User\UserController;



//user login Api
Route::post('/login', [AuthController::class, 'Login']);

//register
Route::post('/register',[AuthController::class,'Register']);

//forget password

Route::post('/forgetpassword',[ForgetController::class, 'ForgetPassword']);

//reset password

Route::post ('/resetpassword',[ResetController::class, 'ResetPassword']);

// user profile
Route::get('/user',[UserController::class , 'User'])->middleware('auth:api');




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


//slider
Route::get('/slidermenu',[SliderController::class, 'Slider']);

//prod list
Route::get('/productdesc/{id}',[ProductDeController::class, 'Description']);


//noti
Route::get('/allNotification',[NotificationController::class, 'Notification']);

//search
Route::get('/search/{key}',[ProductListController::class, 'SearchProduct']);



