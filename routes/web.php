<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/show',[ItemController::class, 'show'])->name('show');
Route::get('/create',[ItemController::class, 'create'])->name('create');
Route::post('/store',[ItemController::class, 'store'])->name('store');
Route::get('/showBooks',[ItemController::class, 'books'])->name('books');
Route::get('/showSummaries',[ItemController::class, 'summaries'])->name('summaries');
Route::get('/showUQuestions',[ItemController::class, 'questions'])->name('questions');
Route::get('/showAll',[ItemController::class, 'all'])->name('all');
Route::get('/search',[ItemController::class, 'search'])->name('search');
Route::get('/edit/{id}',[ItemController::class, 'edit'])->name('edit');
Route::put('/update/{id}',[ItemController::class, 'update'])->name('update');
Route::delete('/update/{id}',[ItemController::class, 'delete'])->name('delete');



Route::get('/showCategory',[CategoryController::class, 'showC'])->name('showCategory');
Route::get('/editCategory/{id}',[CategoryController::class, 'editC'])->name('editCategory');
Route::get('/createCategory',[CategoryController::class, 'createC'])->name('createCategory');
Route::post('/storeCategory',[CategoryController::class, 'storeC'])->name('storeCategory');
Route::put('/updateCategory/{id}',[CategoryController::class, 'updateC'])->name('updateCategory');
Route::delete('/updateCategory/{id}',[CategoryController::class, 'deleteC'])->name('deleteCategory');

