<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

// Route::get('/', function () {
//     return view('landing.index');
// });

// Route::get('/pricing', function () {
//     return view('pricing');
// });
//halaman tesimonial, 
Route::get('testimonials', [LandingController::class, 'testimonials'])->name('landing.
testimonials');
Route::get('wishlist', [LandingController::class, 'wishlist'])->name('landing.wishlist');
Route::get('details{slugl}/', [LandingController::class, 'details'])->name('landing.details');
Route::resource('/', LandingController::class);
