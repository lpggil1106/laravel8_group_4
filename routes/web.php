<?php

use App\Http\Controllers\FrontController;
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

// 前台
Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/course-list', [FrontController::class, 'courseList'])->name('front.course-list');
Route::get('/shop-list', [FrontController::class, 'shopList'])->name('front.shop-list');
Route::get('/news-list', [FrontController::class, 'newsList'])->name('front.news-list');
Route::get('/news-content', [FrontController::class, 'newsContent'])->name('front.news-content');



// 後台
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

Route::prefix('/admin')->group(function () {

    Route::prefix('/news')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('news.index');
        Route::get('/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('/store', [NewsController::class, 'store'])->name('news.store');
        Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
        Route::post('/edit/update/{id}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
    });

    Route::prefix('/news-categories')->group(function () {
        // Route::get('/',[NewsController::class,'index'])->name('news.index');
        // Route::get('/create',[NewsController::class,'create'])->name('news.create');
        // Route::post('/store',[NewsController::class,'store'])->name('news.store');
        // Route::get('/edit/{id}',[NewsController::class,'edit'])->name('news.edit');
        // Route::post('/edit/update/{id}',[NewsController::class,'update'])->name('news.update');
        // Route::delete('/{id}',[NewsController::class,'destroy'])->name('news.destroy');
    });
});
