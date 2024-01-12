<?php

use Illuminate\Support\Facades\Route;

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



use App\Http\Controllers\ProductsController;
Route::get("/",[ProductsController::class , 'index'])->name('products.index');
Route::get("/show/{id}",[ProductsController::class , 'show'])->name('products.show');

Route::get("/create",[ProductsController::class , 'create'])->name('products.create');
Route::post("/store",[ProductsController::class , 'store'])->name('products.store');

Route::get("/edit/{id}",[ProductsController::class , 'edit'])->name('products.edit');
Route::post("/update/{id}",[ProductsController::class , 'update'])->name('products.update');

Route::get("/destroy/{id}",[ProductsController::class , 'destroy'])->name('products.destroy');
