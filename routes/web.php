<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

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



Route::get('/home', [HomeController::class, 'all_products']);
Route::get('/', [HomeController::class, 'all_products']);
Route::get('/categories/{category}', [HomeController::class, 'categories_pages']);
Route::get('/product/{id}', [ProductController::class, 'index']);



Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageSwitcher@switchLang']);

Auth::routes();

Route::get('/product/add/{id}', [ProductController::class, 'add'])->middleware('auth');
