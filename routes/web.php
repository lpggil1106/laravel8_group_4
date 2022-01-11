<?php

use Illuminate\Support\Facades\Auth;
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
    return view('.front.index');
});

Route::get('/admin', function () {
    return view('.admin.index.index');
});

Route::get('/admin/login', function () {
    return view('.layouts.master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->group(function(){

    Route::prefix('/news')->group(function(){
        Route::get('/',[NewsController::class,'index'])->name('news.index');
        Route::get('/create',[NewsController::class,'create'])->name('news.create');
        Route::post('/add',[NewsController::class,'add'])->name('news.add');
        Route::delete('/{id}',[NewsController::class,'delete'])->name('news.delete');
        Route::get('/edit/{id}',[NewsController::class,'edit'])->name('news.edit');
        Route::post('/edit/modify/{id}',[NewsController::class,'modify'])->name('news.modify');
    });
});
