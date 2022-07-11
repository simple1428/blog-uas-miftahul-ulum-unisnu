<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('home.pages.index');
});
 


Route::get('/admin', function () {
    $data = [
        "title" => "Dashboard"
    ];
    return view('admin.pages.index',$data);
});

Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'auth']);
Route::post('/logout', [LoginController::class,'logout']);
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);


Route::resource ('/admin/category', CategoryController::class);
Route::resource ('/admin/post', PostController::class);

Route::get('/blog',[BlogController::class,'index']);
Route::get('/blog/detail/{post}',[BlogController::class,'detail']);