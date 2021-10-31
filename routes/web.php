<?php

// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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
Route::get('/', function () {
    return view('frontend.pages.index');
});
// frontend 
Route::get('/details', [App\Http\Controllers\DetailController::class, 'details'])->name('frontend.pages.details');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'category'])->name('frontend.pages.category');

// backend 

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

    // category 
    // Route::get('/category', [App\Http\Controllers\Category2Controller::class, 'category2'])->name('admin.pages.category')->middleware('auth');
    Route::get('/category/list', [App\Http\Controllers\Category2Controller::class, 'categoryList'])->name('admin.pages.category.list')->middleware('auth');
    Route::get('/category/create', [App\Http\Controllers\Category2Controller::class, 'categoryCreate'])->name('admin.pages.category.create')->middleware('auth');

    // tag 
    Route::get('/tag/list', [App\Http\Controllers\TagController::class, 'index'])->name('admin.pages.tag.list')->middleware('auth');
    Route::get('/tag/create', [App\Http\Controllers\TagController::class, 'create'])->name('admin.pages.tag.create')->middleware('auth');

    // news 
    Route::get('/news/list', [App\Http\Controllers\newsController::class, 'newsList'])->name('admin.pages.news.list')->middleware('auth');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
