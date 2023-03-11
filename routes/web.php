<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing 


// All Listings
Route::get('/', [ListingController::class, 'index']);

// /create listings
Route::get('/listings/create', [ListingController::class, 'create' ]);

// /store listings
Route::post('/listings', [ListingController::class, 'store' ]);

//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Update Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//Delete Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Alternative Single Listing
// Route::get('/listings/{id}', function($id) {
//     $listing = Listing::find($id);

//     if($listing) {
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     } else {
//         abort('404');
//     };
// });