<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomepageController AS FrontHome;
use App\Http\Controllers\Frontend\CartController AS Cart;
use App\Http\Controllers\Frontend\CheckoutController AS Checkout;
use App\Http\Controllers\Frontend\RoomsController AS FrontRooms;
use App\Http\Controllers\Frontend\ConfirmationController AS confirm;

use App\Http\Controllers\Backend\DashboardController AS AdminDashboard;
use App\Http\Controllers\Backend\EquipmentsController AS Equipments;
use App\Http\Controllers\Backend\FeaturesController AS Features;
use App\Http\Controllers\Backend\PropertiesController AS Properties;
use App\Http\Controllers\Backend\PropertyRoomsController AS PropertyRooms;


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
Route::get('/confirmation', [confirm::class, 'confirm']);
Route::get('/invoice', [confirm::class, 'invoice']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//1 - Admin Routes
Route::group([ 'prefix' =>'admin', 'middleware' => ['auth','verified', 'isAdmin']], function () {

    Route::resources([
        '/' => AdminDashboard::class,
        '/equipments' => Equipments::class,
        '/features' => Features::class,
        '/properties' => Properties::class,
        '/rooms' => PropertyRooms::class,

    ]);

    //Route::get('/products/items/{id}', [ProductsController::class, 'items']);

});

require __DIR__.'/auth.php';
