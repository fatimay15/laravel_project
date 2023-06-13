<?php

use App\Models\User;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
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


//commone Resource Routes
// index-> show all listing
// show-> show single listing
// create->show form to create single listing
// store->store new listing
// edit->show form to edit listing
// update->update listing
// destroy-> delete listing



// Route::get('/', function () {
//     return view('welcome');
// });
//all listing
Route::get('/', [ListingController::class, 'index']);
//single listing
// Route::get('/listings/{id}',function($id)
// {
//     $listing=Listing::find($id);
//     if($listing){
//         return view('listing',
//         [
//            'listing'=> $listing
//         ]);
//     }
//     else 
//     {
//         abort(404);
//     }
// });
Route::get('/search', [ListingController::class, 'index']);

//show create form

Route::get('/listings/create',[ListingController::class, 'create']);

//store single listing

Route::post('/listings/index',[ListingController::class, 'store']);


Route::get('/test', [ListingController::class, 'test']);

// show edit form
Route::get('/listings/{listing}/edit',[ListingController::class, 'edit']);
//Another method 

Route::get('/listings/{listing}',[ListingController::class, 'show']);

Route::get('/users/{id}',[UserController::class, 'show']);



