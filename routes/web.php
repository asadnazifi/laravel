<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Admincontroller;
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

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::get('/',[Admincontroller::class,'index'])->name('admin.AdminController');
    //users grope
    Route::get('UserList',[Admincontroller::class,'UserList'])->name('admin.UserList');
});




