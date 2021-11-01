<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

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

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function() {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

//========== Admin Routes

Route::middleware(['auth:admin'])->group(function(){
    
    Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('dashboard')->middleware('auth:admin');

    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

}); // End Middleware Admin

//=========== Admin Category All Routes
Route::middleware(['auth:admin'])->prefix('category')->group(function() {
    
    Route::get('/view', [CategoryController::class, 'CategoryView'])->name('all.category');

    Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');

    Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');

    Route::post('/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category.update');

    Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');


}); //End: Admin Category All Routes

//=========== Admin Post All Routes
Route::middleware(['auth:admin'])->prefix('post')->group(function() {
    
    Route::get('/list/post', [PostController::class, 'ListPost'])->name('list.post');

    Route::get('/add/post', [PostController::class, 'AddPost'])->name('add.post');

    Route::post('/post/store', [PostController::class, 'PostStore'])->name('post.store');

    Route::get('/post/edit/{id}', [PostController::class, 'PostEdit'])->name('post.edit');

    Route::post('/post/update/{id}', [PostController::class, 'PostUpdate'])->name('post.update');

    Route::get('/post/delete/{id}', [PostController::class, 'PostDelete'])->name('post.delete');

}); //End: Admin Post All Routes


//=========== Users Routes
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */
