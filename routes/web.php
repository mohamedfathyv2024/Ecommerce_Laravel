<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;

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

Route::get("products",[productcontroller::class,"index"]);
Route::get("products/create",[productcontroller::class,"create"]);
Route::post("products",[productcontroller::class,"store"]);
Route::get("products/{id}",[productcontroller::class,"show"]);
Route::get("products/{id}/edit",[productcontroller::class,"edit"]);
Route::put("products/{id}",[productcontroller::class,"update"]);
Route::delete("products/{id}",[productcontroller::class,"destroy"]);
