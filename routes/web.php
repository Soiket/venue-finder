<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\ZoneController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Resource_;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('getDivsionsZoneList', [HomeController::class, 'getDivsionsZoneList'])->name('getDivsionsZoneList');
Route::get('venueSearch', [HomeController::class, 'venueSearch'])->name('venueSearch');
Route::resource('customer', CustomerController::class);
Route::get('venuBooking/{id}', [BookingController::class,'index'])->name('venuBooking');
Route::get('bookingDate', [BookingController::class,'bookingDate'])->name('bookingDate');
Route::get('/manageBooking', [BookingController::class,'manageBooking'])->name('manageBooking');
Route::resource('booking', BookingController::class);

Route::get('/viewProfile', [CustomerController::class,'viewProfile'])->name('viewProfile');
Route::post('/passwordUpdate/{id}', [CustomerController::class,'passwordUpdate'])->name('passwordUpdate');

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/create-division', [DivisionController::class, 'create'])->name('create-division');
Route::post('/store-division', [DivisionController::class, 'store'])->name('store-division');
Route::get('/manage-division', [DivisionController::class, 'index'])->name('manage-division');
Route::get('/edit-division/{id}', [DivisionController::class, 'edit'])->name('edit-division');
Route::post('/update-division/{id}', [DivisionController::class, 'update'])->name('update-division');
Route::post('/delete-division/{id}', [DivisionController::class, 'destroy'])->name('delete-division');

Route::resource('zone',ZoneController::class);

Route::resource('venue',VenueController::class);

