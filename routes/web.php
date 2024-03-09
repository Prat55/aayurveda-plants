<?php

use App\Models\Plant;
use App\Models\UserInformation;
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
    return view('frontend.home');
});

Route::get('/plants', function () {
    return view('frontend.plants', [
        'plants' => Plant::latest()->get()
    ]);
})->name('plants');

Route::get('/plant/{id}/{name}', function ($id) {
    return view('frontend.plant', [
        'plant' => Plant::where('token', $id)->first()
    ]);
});

Route::get('/register/information', function () {
    return view('frontend.register');
})->name('user.register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/add/plant', function () {
        return view('frontend.add-plant');
    })->name('add-plant');
});
