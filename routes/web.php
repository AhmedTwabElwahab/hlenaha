<?php

use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TripController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionsController;
use Laravel\Socialite\Facades\Socialite;


Route::get('/', function () {return redirect('sign-in');})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
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


Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('google')->user();
    dd($user);
    // $user->token
});

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

    //bankAccount
    Route::get('/bank_account',[BankAccountController::class,'index'])->name('bank_account');
    Route::get('/bank_account/{account}/edit',[BankAccountController::class,'edit'])->name('bank_account.edit');
    Route::get('/bank_account/create',[BankAccountController::class,'create'])->name('bank_account.create');
    Route::post('/bank_account',[BankAccountController::class,'store'])->name('bank_account.store');
    Route::put('/bank_account/{bankAccount}',[BankAccountController::class,'update'])->name('bank_account.update');
    Route::delete('/bank_account/{bankAccount}',[BankAccountController::class,'destroy'])->name('bank_account.destroy');

    //Transaction
    Route::resource('transaction', TransactionController::class)->except('show')->names('transaction');

    Route::post('bank_account/get',[BankAccountController::class,'query'])->name('bank_account.query');

    Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');

    Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');

    //messages
    Route::get('messages',[MessageController::class,'index'])->name('messages.index');
    Route::post('messages',[MessageController::class,'store'])->name('messages.store');
    Route::get('messages/{web_user}',[MessageController::class,'show'])->name('messages.show');
    Route::post('messages/getMessages',[MessageController::class,'getMessages'])->name('messages.getMessages');


    //Users
//    Route::get('/users',[UserController::class,'index']);
//    Route::post('/users',[UserController::class,'store']);
//    Route::put('/users/{User}',[UserController::class,'update']);
//    Route::get('/users/{User}',[UserController::class,'show']);
//    Route::delete('/users/{User}',[UserController::class,'destroy']);

});

