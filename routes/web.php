<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;

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
