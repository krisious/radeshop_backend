<?php


use App\Models\ProductGallery;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;  
use App\Http\Controllers\TransactionController;  

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Auth::routes(['register' => false]);

Route::get('products/{id}/gallery', [ProductController::class, 'gallery'])->name('products.gallery');
Route::resource('products', ProductController::class);

Route::resource('product-galleries', ProductGalleryController::class);

Route::get('transactions/{id}/set-status', [TransactionController::class, 'setStatus'])->name('transactions.status');
Route::resource('transactions', TransactionController::class);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
