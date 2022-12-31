<?php

use App\Http\Controllers\BasketAddController;
use App\Http\Controllers\BasketController;

use App\Http\Controllers\BasketPlaceController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', IndexController::class)->name('index');

// Route::get('/basket', BasketController::class)->name('basket');

Route::get('/basket/place', BasketPlaceController::class)->name('order');



Route::get('/categories', CategoriesController::class)->name('categories');

Route::get('/{category}', CategoryController::class)->name('category');

Route::get('/{category}/{product?}', ProductController::class)->name('product');
Route::post('/basket/add/{id}', BasketAddController::class)->name('basket_add');

