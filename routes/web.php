<?php

use App\Models\ServiceCategories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\NewsCategoriesController;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\ServiceCategoriesController;

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

// Route::prefix('/tingsaroma')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('front.index');
    // Route::get('/course-list', [FrontController::class, 'courseList'])->name('front.course-list');
    // Route::get('/course-content', [FrontController::class, 'courseContent'])->name('front.course-content');
    // Route::get('/course',[FrontController::class,'courseList'])->name('front.course-list');

    Route::prefix('/course')->group(function (){
        Route::get('/',[FrontController::class,'courseList'])->name('front.course-list');
        Route::get('/{id}',[FrontController::class,'courseContent'])->name('front.course-content');
    });

    Route::prefix('/shop')->group(function (){
        Route::get('/',[FrontController::class,'shopList'])->name('front.shop-list');
        Route::get('/{id}',[FrontController::class,'shopContent'])->name('front.shop-content');
    });

    Route::prefix('/news')->group(function (){
        Route::get('/', [FrontController::class, 'newsList'])->name('front.news-list');
        Route::get('/{id}', [FrontController::class, 'newsContent'])->name('front.news-content');
    });

    Route::post('/contact', [FrontController::class, 'contact'])->name('contact');

    Route::get('/notice', [FrontController::class, 'notice'])->name('front.notice');
    Route::get('/contact-page', [FrontController::class, 'contactPage'])->name('front.contact');
// });

// 購物車
Route::prefix('/shopping-cart')->group(function ()
{
    Route::post('/add',[ShoppingCartController::class,'add'])->name('shopping-cart.add');
    Route::post('update',[ShoppingCartController::class,'update'])->name('shopping-cart.update');
    Route::post('/delete',[ShoppingCartController::class,'delete'])->name('shopping-cart.delete');

    Route::middleware(['cart.check'])->group(function()
    {
        Route::get('/step01',[ShoppingCartController::class,'step01'])->name('shopping-cart.step01');
        Route::get('/step02',[ShoppingCartController::class,'step02'])->name('shopping-cart.step02');
        Route::post('/step02',[ShoppingCartController::class,'step02Store'])->name('shopping-cart.step02-store');
        Route::get('/step03',[ShoppingCartController::class,'step03'])->name('shopping-cart.step03');
        Route::post('/step03',[ShoppingCartController::class,'step03Store'])->name('shopping-cart.step03-store');
    });
    Route::get('/step04/{order_no}',[ShoppingCartController::class,'step04'])->name('shopping-cart.step04');
});




// 後台
// Route::get('/admin', function () {
//     return view('.admin.index.index');
// });

// Route::get('/admin/login', function () {
//     return view('master');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->middleware(['auth'])->group(function () {
    Route::prefix('/orders')->group(function () {
        Route::get('/',[OrdersController::class,'index'])->name('orders.index');

    });
    Route::prefix('/news-categories')->group(function () {
        Route::get('/',[NewsCategoriesController::class,'index'])->name('news-categories.index');
        Route::get('/create',[NewsCategoriesController::class,'create'])->name('news-categories.create');
        Route::post('/store',[NewsCategoriesController::class,'store'])->name('news-categories.store');
        Route::get('/edit/{id}',[NewsCategoriesController::class,'edit'])->name('news-categories.edit');
        Route::post('/edit/update/{id}',[NewsCategoriesController::class,'update'])->name('news-categories.update');
        Route::delete('/{id}',[NewsCategoriesController::class,'destroy'])->name('news-categories.destroy');
    });

    Route::prefix('/news')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('news.index');
        Route::get('/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('/store', [NewsController::class, 'store'])->name('news.store');
        Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
        Route::post('/edit/update/{id}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
    });

    Route::prefix('/service-categories')->group(function () {
        Route::get('/',[ServiceCategoriesController::class,'index'])->name('service-categories.index');
        Route::get('/create',[ServiceCategoriesController::class,'create'])->name('service-categories.create');
        Route::post('/store',[ServiceCategoriesController::class,'store'])->name('service-categories.store');
        Route::get('/edit/{id}',[ServiceCategoriesController::class,'edit'])->name('service-categories.edit');
        Route::post('/edit/update/{id}',[ServiceCategoriesController::class,'update'])->name('service-categories.update');
        Route::delete('/{id}',[ServiceCategoriesController::class,'destroy'])->name('service-categories.destroy');
    });

    Route::prefix('/products')->group(function(){
        Route::get('/',[ProductsController::class,'index'])->name('products.index');
        Route::get('/create',[ProductsController::class,'create'])->name('products.create');
        Route::post('/store',[ProductsController::class,'store'])->name('products.store');
        Route::get('/edit/{id}',[ProductsController::class,'edit'])->name('products.edit');
        Route::post('/edit/update/{id}',[ProductsController::class,'update'])->name('products.update');
        Route::delete('/{id}',[ProductsController::class,'destroy'])->name('products.destroy');
        Route::post('/multi/{id}',[ProductsController::class,'multiDestroy'])->name('products.multi.destroy');
    });

    Route::prefix('/product-categories')->group(function(){
        Route::get('/',[ProductCategoriesController::class,'index'])->name('product-categories.index');
        Route::get('/create',[ProductCategoriesController::class,'create'])->name('product-categories.create');
        Route::post('/store',[ProductCategoriesController::class,'store'])->name('product-categories.store');
        Route::get('/edit/{id}',[ProductCategoriesController::class,'edit'])->name('product-categories.edit');
        Route::post('/edit/update/{id}',[ProductCategoriesController::class,'update'])->name('product-categories.update');
        Route::delete('/{id}',[ProductCategoriesController::class,'destroy'])->name('product-categories.destroy');
    });

    Route::delete('/products-image',[ProductsController::class,'imageDelete'])->name('product.image_delete');
    Route::post('/image-upload',[ToolBoxController::class,'imageUpload'])->name('tool.image_upload');

});
