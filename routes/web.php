<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;


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
  return view('page/home');
});

Route::get('/pricing', [GuestController::class, 'pricing']);

Route::get('/blog', function () {
  return view('page/blog');
});

Route::get('/about', function () {
  return view('page/about');
});

Route::get('/login', [AdminController::class, 'login']);
Route::post('/login', [AdminController::class, 'loginProses'])->name('prosesLogin');

Route::get('/dashboard/main', function () {
  $data = Product::all();
  return view('page/dashboard/main', compact('data'));
})->name('dashboard');

Route::resource('products', ProductController::class);
