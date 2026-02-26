<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VNPayController;
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

Route::get('/', function () {
    return view('home');
})->name('home');


//Route vào trang admin
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::get('/product', function () {
    return view('products.product');
})->middleware(['auth', 'verified'])->name('product');

Route::get('/user', function () {
    return view('user');
})->middleware(['auth', 'verified'])->name('user');

Route::get('/category', function () {
    return view('category');
})->middleware(['auth', 'verified'])->name('category');

Route::middleware('auth', 'admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Cổng thanh toán VNPay
Route::post('/vn-payment', [VNPayController::class, 'vnpayment']);

require __DIR__ . '/auth.php';
