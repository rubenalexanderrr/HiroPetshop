<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
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
    return view('welcome');
});

Route::get('/whoweare', function () {
    return view('whoweare');
});

Route::get('/whatwedo', function () {
    return view('whatwedo');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/adoption', function () {
    return view('adoption');
});

Route::get('/cat', function () {
    return view('cat');
});

Route::get('/admin/product', function () {
    return view('product');
});

Route::get('/admin/management', function () {
    return view('management');
});

Route::get('/admin/payment', [CustomerController::class, 'getCustomers'])->name('payment');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

// Create
Route::get('/create-customer', [CustomerController::class, 'createCustomer'])->name('create');
Route::post('/insert-customer', [CustomerController::class, 'insertCustomer'])->name('insert');

// Read
Route::get('/admin/payment', [CustomerController::class, 'getCustomers'])->name('payment');
Route::get('/admin/payment', [CustomerController::class, 'getCustomers'])->name('payment');

// Update
Route::patch('/save-customer/{customer_id}', [CustomerController::class, 'updateCustomer'])->name('save');
Route::get('/update-customer/{customer_id}', [CustomerController::class, 'showFormUpdate'])->name('update');

// Delete
Route::delete('/delete-customer/{customer_id}', [CustomerController::class, 'deleteCustomer'])->name('delete');

require __DIR__ . '/auth.php';

require __DIR__ . '/adminauth.php';
