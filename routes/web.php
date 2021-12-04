<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Category2Controller;



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
    // Route::get('/category/list', [App\Http\Controllers\Category2Controller::class, 'categoryList'])->name('admin.pages.category.list')->middleware('auth');
    // Route::get('/category/create', [App\Http\Controllers\Category2Controller::class, 'categoryCreate'])->name('admin.pages.category.create')->middleware('auth');
    
    Route::get('/category', [App\Http\Controllers\Category2Controller::class, 'index'])->name('admin.pages.category.list')->middleware('auth');
    Route::get('/category/add', [App\Http\Controllers\Category2Controller::class, 'add'])->name('admin.pages.category.create')->middleware('auth');
    Route::post('/category/add', [App\Http\Controllers\Category2Controller::class, 'store'])->name('category.store')->middleware('auth');
    Route::get('/category/edit/{id}', [App\Http\Controllers\Category2Controller::class, 'edit'])->name('category.edit')->middleware('auth');
    Route::post('/category/update/', [App\Http\Controllers\Category2Controller::class, 'update'])->name('category.update')->middleware('auth');
    Route::get('/category/delete/{id}', [App\Http\Controllers\Category2Controller::class, 'delete'])->middleware('auth');
    
    // tag 
    Route::get('/tag', [App\Http\Controllers\TagController::class, 'index'])->name('admin.pages.tag.list')->middleware('auth');
    Route::get('/tag/add', [App\Http\Controllers\TagController::class, 'add'])->name('admin.pages.tag.create')->middleware('auth');
    Route::post('/tag/add', [App\Http\Controllers\TagController::class, 'store'])->name('tag.store')->middleware('auth');
    Route::get('/tag/edit/{id}', [App\Http\Controllers\TagController::class, 'edit'])->name('tag.edit')->middleware('auth');
    Route::post('/tag/update/', [App\Http\Controllers\TagController::class, 'update'])->name('tag.update')->middleware('auth');
    Route::get('/tag/delete/{id}', [App\Http\Controllers\TagController::class, 'delete'])->middleware('auth');
    
    // role 
    Route::get('/role', [App\Http\Controllers\RoleController::class, 'index'])->name('admin.pages.role.list')->middleware('auth');
    Route::get('/role/add', [App\Http\Controllers\RoleController::class, 'add'])->name('admin.pages.role.create')->middleware('auth');
    Route::post('/role/add', [App\Http\Controllers\RoleController::class, 'store'])->name('role.store')->middleware('auth');
    Route::get('/role/edit/{id}', [App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit')->middleware('auth');
    Route::post('/role/update/', [App\Http\Controllers\RoleController::class, 'update'])->name('role.update')->middleware('auth');
    Route::get('/role/delete/{id}', [App\Http\Controllers\RoleController::class, 'delete'])->middleware('auth');

    // moderator 

    Route::get('/moderator', [App\Http\Controllers\ModeratorController::class, 'index'])->name('admin.pages.moderator.list')->middleware('auth');
    Route::get('/moderator/add', [App\Http\Controllers\ModeratorController::class, 'add'])->name('admin.pages.moderator.create')->middleware('auth');
    Route::post('/moderator/add', [App\Http\Controllers\ModeratorController::class, 'store'])->name('moderator.store')->middleware('auth');
    Route::get('/moderator/edit/{id}', [App\Http\Controllers\ModeratorController::class, 'edit'])->name('moderator.edit')->middleware('auth');
    Route::post('/moderator/update/', [App\Http\Controllers\ModeratorController::class, 'update'])->name('moderator.update')->middleware('auth');
    Route::get('/moderator/delete/{id}', [App\Http\Controllers\ModeratorController::class, 'delete'])->middleware('auth');

    // news 
    // Route::get('/post/list', [App\Http\Controllers\PostController::class, 'postList'])->name('admin.pages.post.list')->middleware('auth');

    Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('admin.pages.post.list')->middleware('auth');
    Route::get('/post/add', [App\Http\Controllers\PostController::class, 'add'])->name('admin.pages.post.create')->middleware('auth');
    Route::post('/post/add', [App\Http\Controllers\PostController::class, 'store'])->name('post.store')->middleware('auth');
    Route::get('/post/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit')->middleware('auth');
    Route::post('/post/update/', [App\Http\Controllers\PostController::class, 'update'])->name('post.update')->middleware('auth');
    Route::get('/post/delete/{id}', [App\Http\Controllers\PostController::class, 'delete'])->middleware('auth');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
