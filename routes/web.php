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
Route::get(
    'login',
    [\App\Http\Controllers\Admin\AuthController::class, 'login']
)->name('login');
Route::middleware([])->group(function () {
    Route::get('/',[\App\Http\Controllers\Admin\UserController::class],'login');


});
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
   Route::get('new',function (){
       dd(12345);
   });
});
Route::get('/home', function () {
    return response('Hello World', 200)
        ->header('Content-Type', 'text/plain');
});
