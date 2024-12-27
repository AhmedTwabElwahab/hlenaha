<?php

use App\Http\Controllers\Api\BankAccountController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\TripController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;


Route::get('/', function () {return redirect('sign-in');})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');

Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify');

Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');

Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');

Route::group(['middleware' => ['auth',CheckAdmin::class]], function ()
{
    Route::resource('driver', DriverController::class)->except('show')->names('driver');
    Route::resource('cars', CarController::class)->except('show')->names('cars');

    Route::get('/driver/bank_account/{driver}',[DriverController::class, 'bank_account'])->name('bank_account.driver');
    //Trips
    Route::resource('trips', TripController::class)->except('show')->names('trips');

    Route::get('/user_profile',[ProfileController::class, 'index'])->name('user_profile');
    Route::put('/user_profile/{user}',[ProfileController::class, 'update'])->name('user_profile.update');
    Route::put('/user/forgotPassword',[ProfileController::class, 'forgotPassword'])->name('user_profile.forgotPassword');

    //Users
//    Route::get('/users',[UserController::class,'index']);
//    Route::post('/users',[UserController::class,'store']);
//    Route::put('/users/{User}',[UserController::class,'update']);
//    Route::get('/users/{User}',[UserController::class,'show']);
//    Route::delete('/users/{User}',[UserController::class,'destroy']);

});

