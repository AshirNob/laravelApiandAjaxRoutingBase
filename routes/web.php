<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
    Route::group(['middleware' => ['auth','prevent-back-history','cors']], function () {
        Route::get('/',[HomeController::class,'index']);
        Route::get('/dashboard',[HomeController::class,'dashboard'])->middleware('role-base','only.ajax');

    });

   
    
  // 

