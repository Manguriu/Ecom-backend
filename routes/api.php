<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorsController;
use App\Http\Controllers\Admin\ContactController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// api to show the number of times the site has been visited
//visitor visit data
Route::get('/getvisitor',[VisitorsController::class, 'Details']);


//contact route
Route::POST('/getcontact',[ContactController::class, 'Contacts']);
