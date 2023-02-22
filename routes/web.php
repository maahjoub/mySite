<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;
use Illuminate\Routing\Controllers\Middleware;

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
Route::middleware(['auth'])->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    // Category Routs 
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    //Project Routs
    Route::get('/project', [ProjectController::class, 'index'])->name('project');
    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::get('/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::post('/project/create', [ProjectController::class, 'store'])->name('project.store');
    Route::post('/project/update/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('/project/delete/{id}', [ProjectController::class, 'delete'])->name('project.delete');

    // Add Image To Projects
    Route::get('/image/{id}/show', [ImageController::class, 'index'])->name('image.show');
    Route::get('/image/{id}', [ImageController::class, 'addImage'])->name('image');
    Route::post('/image', [ImageController::class, 'store'])->name('image.store');

    // Contact au Routs
    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
});
