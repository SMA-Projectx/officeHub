<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomepageController AS FrontHome;
use App\Http\Controllers\Frontend\CartController AS Cart;
use App\Http\Controllers\Frontend\CheckoutController AS Checkout;
use App\Http\Controllers\Frontend\RoomsController AS FrontRooms;


use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/


Route::resources([
    '/' => FrontHome::class,
    '/cart' => Cart::class,
    '/checkout' => Checkout::class,
]);

Route::get('/about-us', [FrontHome::class, 'about']);
Route::get('/contact-us', [FrontHome::class, 'contact']);
Route::get('/rooms', [FrontRooms::class, 'rooms']);
Route::get('/room/{id}', [FrontRooms::class, 'room']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
