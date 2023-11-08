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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix'=>'category'], function(){
    Route::get('create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('category.create');
    Route::post('category_Store',[\App\Http\Controllers\Admin\CategoryController::class,'categoryStore'])->name('category.store');
    Route::get('view',[\App\Http\Controllers\Admin\CategoryController::class,'categoryView'])->name('category.View');
    Route::get('delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'deleteCategory'])->name('delete.category');
    Route::get('edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'editCategory'])->name('edit.Category');
    Route::post('update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'updateCategory'])->name('update.category');
});
