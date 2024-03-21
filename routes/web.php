<?php

use App\Models\Medicine;
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

// ?Plant routes
Route::get('/plants', function () {
    return view('frontend.plants', [
        'plants' => Plant::latest()->get()
    ]);
})->name('plants');

Route::get('/plant/{token}', function ($token) {
    return view('frontend.plant', [
        'plant' => Plant::where('token', $token)->first()
    ]);
});

Route::group(['prefix' => 'disease'], function () {
    Route::get('/stomach-disease', function () {
        return view('frontend.stomach-disease');
    })->name('stomach_disease');

    Route::get('/diabeties', function () {
        return view('frontend.diabeties');
    })->name('diabeties');

    Route::get('/heart-disease', function () {
        return view('frontend.heart-disease');
    })->name('heart_disease');

    Route::get('/joint-pain', function () {
        return view('frontend.jointpain');
    })->name('jointpain');
});

// ?Medicine routes
Route::get('/medicines', function () {
    return view('frontend.medicines', [
        'medicines' => Medicine::latest()->get()
    ]);
})->name('medicines');

Route::get('/medicine/{token}', function ($token) {
    return view('frontend.medicine', [
        'medicine' => Medicine::where('token', $token)->first()
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

    Route::group(['prefix' => 'add'], function () {
        Route::get('plant', function () {
            return view('backend.add-plant');
        })->name('add-plant');

        Route::get('medicine', function () {
            return view('backend.add-medicine');
        })->name('add-medicine');
    });
});
