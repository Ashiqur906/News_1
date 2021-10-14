<?php

// use Illuminate\Support\Facades\Auth;
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



// Auth::routes();
Route::get('/', function () {
    return view('frontend.pages.index');
});

// Route::get('/details', function () {
//     return view('frontend.pages.details');
// });

Route::get('/details', [App\Http\Controllers\DetailController::class, 'details'])->name('frontend.pages.details');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'category'])->name('frontend.pages.category');

// Route::group(['prefix' => 'admin'], function () {

//     Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

//     ##media-image
//     Route::get('/media-image', [App\Http\Controllers\MediaImageController::class, 'index'])->name('mediaimage.index')->middleware('auth');
//     Route::get('/media-image/add', [App\Http\Controllers\MediaImageController::class, 'add'])->name('mediaimage.add')->middleware('auth');
//     Route::post('/media-image/add', [App\Http\Controllers\MediaImageController::class, 'store'])->name('mediaimage.store')->middleware('auth');

//     Route::get('/media-image/edit/{id}', [App\Http\Controllers\MediaImageController::class, 'edit'])->name('mediaimage.edit')->middleware('auth');
//     Route::post('/media-image/edit/{id}', [App\Http\Controllers\MediaImageController::class, 'editSubmit'])->middleware('auth');
//     Route::post('/media-image/delete/{id}', [App\Http\Controllers\MediaImageController::class, 'delete'])->middleware('auth');

//     ##Banner
//     Route::get('/banner', [App\Http\Controllers\BannerController::class, 'index'])->name('banner.index')->middleware('auth');
//     Route::get('/banner/add', [App\Http\Controllers\BannerController::class, 'add'])->name('banner.add')->middleware('auth');
//     Route::post('/banner/add', [App\Http\Controllers\BannerController::class, 'store'])->name('banner.store')->middleware('auth');

//     Route::get('/banner/edit/{id}', [App\Http\Controllers\BannerController::class, 'edit'])->name('banner.edit')->middleware('auth');
//     Route::post('/banner/update/', [App\Http\Controllers\BannerController::class, 'update'])->name('banner.update')->middleware('auth');
//     Route::get('/banner/delete/{id}', [App\Http\Controllers\BannerController::class, 'delete'])->middleware('auth');
//     ##category
//     Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index')->middleware('auth');
//     Route::get('/category/add', [App\Http\Controllers\CategoryController::class, 'add'])->name('category.add')->middleware('auth');
//     Route::post('/category/add', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store')->middleware('auth');
//     Route::get('/category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit')->middleware('auth');
//     Route::post('/category/update/', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update')->middleware('auth');
//     Route::get('/category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->middleware('auth');

//     ##tag
//     Route::get('/tag', [App\Http\Controllers\TagController::class, 'index'])->name('tag.index')->middleware('auth');
//     Route::get('/tag/add', [App\Http\Controllers\TagController::class, 'add'])->name('tag.add')->middleware('auth');
//     Route::post('/tag/add', [App\Http\Controllers\TagController::class, 'store'])->name('tag.store')->middleware('auth');
//     Route::get('/tag/edit/{id}', [App\Http\Controllers\TagController::class, 'edit'])->name('tag.edit')->middleware('auth');
//     Route::post('/tag/update/', [App\Http\Controllers\TagController::class, 'update'])->name('tag.update')->middleware('auth');
//     Route::get('/tag/delete/{id}', [App\Http\Controllers\TagController::class, 'delete'])->middleware('auth');

//     ##Media
//     Route::get('/media', [App\Http\Controllers\MediaController::class, 'index'])->name('media.index')->middleware('auth');
//     Route::get('/media/add', [App\Http\Controllers\MediaController::class, 'add'])->name('media.add')->middleware('auth');
//     Route::post('/media/add', [App\Http\Controllers\MediaController::class, 'store'])->name('media.store')->middleware('auth');
//     Route::get('/media/edit/{id}', [App\Http\Controllers\MediaController::class, 'edit'])->name('media.edit')->middleware('auth');
//     Route::post('/media/update', [App\Http\Controllers\MediaController::class, 'update'])->name('media.update')->middleware('auth');
//     Route::get('/media/delete/{id}', [App\Http\Controllers\MediaController::class, 'delete'])->name('media.delete')->middleware('auth');

//     ##Entity
//     Route::get('/entities', [App\Http\Controllers\EntityController::class, 'index'])->name('people.index')->middleware('auth');
//     Route::get('/entity/add', [App\Http\Controllers\EntityController::class, 'add'])->name('people.add')->middleware('auth');
//     Route::post('/entity/add', [App\Http\Controllers\EntityController::class, 'store'])->name('people.store')->middleware('auth');

//     Route::get('/team/add', [App\Http\Controllers\EntityController::class, 'teamAdd'])->name('team.add')->middleware('auth');
    

//     Route::get('/entity/edit/{id}', [App\Http\Controllers\EntityController::class, 'edit'])->name('people.edit')->middleware('auth');
//     Route::post('/entity/update', [App\Http\Controllers\EntityController::class, 'upate'])->name('people.update')->middleware('auth');
//     Route::get('/entity/delete/{id}', [App\Http\Controllers\EntityController::class, 'delete'])->middleware('auth');

//     ##Role
//     Route::get('/roles', [App\Http\Controllers\RoleController::class, 'index'])->name('role.index')->middleware('auth');
//     Route::get('/role/add', [App\Http\Controllers\RoleController::class, 'add'])->name('role.add')->middleware('auth');
//     Route::post('/role/add', [App\Http\Controllers\RoleController::class, 'store'])->name('role.store')->middleware('auth');

//     Route::get('/role/edit/{id}', [App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit')->middleware('auth');
//     // Route::post('/role/edit/{id}', [App\Http\Controllers\RoleController::class, 'editSubmit'])->middleware('auth');
//     Route::get('/role/delete/{id}', [App\Http\Controllers\RoleController::class, 'delete'])->name('role.delete')->middleware('auth');

//     ##Media Relation
//     Route::get('/media-relation', [App\Http\Controllers\MediaRelationController::class, 'index'])->name('media-relation.index')->middleware('auth');
//     Route::get('/media-relation/add', [App\Http\Controllers\MediaRelationController::class, 'add'])->name('media-relation.add')->middleware('auth');
//     Route::post('/media-relation/add', [App\Http\Controllers\MediaRelationController::class, 'store'])->name('media-relation.store')->middleware('auth');

//     Route::get('/media-relation/edit/{id}', [App\Http\Controllers\MediaRelationController::class, 'edit'])->name('media-relation.edit')->middleware('auth');
//     Route::post('/media-relation/edit/{id}', [App\Http\Controllers\MediaRelationController::class, 'editSubmit'])->middleware('auth');
//     Route::post('/media-relation/delete/{id}', [App\Http\Controllers\MediaRelationController::class, 'delete'])->middleware('auth');


//     ##About
//     Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about.index')->middleware('auth');
//     Route::get('/about/add', [App\Http\Controllers\AboutController::class, 'add'])->name('about.add')->middleware('auth');
//     Route::post('/about/add', [App\Http\Controllers\AboutController::class, 'store'])->name('about.store')->middleware('auth');

//     Route::get('/about/edit/{id}', [App\Http\Controllers\AboutController::class, 'edit'])->name('about.edit')->middleware('auth');
//     Route::post('/about/edit/{id}', [App\Http\Controllers\AboutController::class, 'editSubmit'])->middleware('auth');
//     Route::post('/about/delete/{id}', [App\Http\Controllers\AboutController::class, 'delete'])->middleware('auth');
// });

