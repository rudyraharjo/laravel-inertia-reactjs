<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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

Route::get('/', function () {
    // return view('app');
    return Inertia::render('Home');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
});

// Route::group(['prefix' => 'users'], function () {
//     Route::get('/', function () {
//         return Inertia::render('Users/UserIndex');
//     });
//     Route::get('/create', function () {
//         return Inertia::render('Users/UserCreate');
//     });
// });

Route::resource('/users', UserController::class);