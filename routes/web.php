<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\List_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;

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

// All listings
Route::get('/', [ListingController::class, 'index']);

// Show Create form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data 
Route::post('/listings', [ListingController::class, 'store']);

// Show Edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing Data
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Single Listings
Route::get('/listings/{id}', [ListingController::class, 'show']);

// Show Register form
Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);