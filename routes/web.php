<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RealestateController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Login & Register Page
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');


//About Us Page
Route::get('/aboutUs', [OfficeController::class, 'index'])->name('aboutUs');


//Manage Office
Route::get('/manageCompany', [OfficeController::class, 'manageCompany']);

Route::get('/addOffice', [OfficeController::class, 'create']);
Route::post('/addOffice', [OfficeController::class, 'store']);

Route::get('/updateOffice/{id}', [OfficeController::class, 'edit']);
Route::post('/updateOffice/{id}', [OfficeController::class, 'update']);

Route::get('/deleteOffice/{id}', [OfficeController::class, 'destroy']);

//Manage Real Estate
Route::get('/manageRealEstate', [RealestateController::class, 'manageRealEstate']);

Route::get('/addRealEstate', [RealestateController::class, 'create']);
Route::post('/addRealEstate', [RealestateController::class, 'store']);

Route::get('/updateRealEstate/{id}', [RealestateController::class, 'edit']);
Route::post('/updateRealEstate/{id}', [RealestateController::class, 'update']);

Route::get('/deleteRealEstate/{id}', [RealestateController::class, 'destroy']);
Route::get('/updateStatus/{id}', [RealestateController::class, 'updateStatus']);
