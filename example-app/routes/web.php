<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Submitdata;

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
// it shows registration form
Route::get('/', function () {
    return view('welcome');
});


//staying on same admin page if user have session have otherwise redirect to login
route::get('login',function(){
    if(session()->has('user_name')){
        return redirect('admin');
    }
return view('login');
});

// route for login
Route::post('log',[Submitdata::class,'log'])->name('log');

// route for logout
Route::get('/logout',[Submitdata::class,'logout']);

// route for registration
Route::post('submit',[Submitdata::class,'submition'])->name('submit');

// route showing admin view
Route::get("admin",[Submitdata::class,'protect']);


// resource route
Route::resource('/user',Submitdata::class);

