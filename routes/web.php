<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/createcategory',[CategoryController::class,'createCategory']);
Route::get('/viewCategory',[CategoryController::class,'index']);
Route::post('/createNewCategory',[CategoryController::class,'store']);
Route::get('/update-category/{id}',[CategoryController::class,'edit']);
Route::get('/deleteCategory/{id}',[CategoryController::class,'destroy']);
Route::post('/save-updated-category',[CategoryController::class,'update']);

Route::get('/showblog',[BlogController::class,'index']);
Route::get('/createblog',[BlogController::class,'create']);
Route::post('/createNewBlog',[BlogController::class,'store']);
Route::get('/update-blog/{id}',[BlogController::class,'edit']);
Route::post('/save-updated-blog',[BlogController::class,'update']);
Route::get('/delete-blog{id}',[BlogController::class,'destroy']);