<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BankAccountController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\api\notificationController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\VerificationApiController;
use Illuminate\Support\Facades\Route;


Route::controller(AuthController::class)->group(function ()
{
    Route::get('/login','index')->name('login');

    Route::post('/login','login')->name('login');
    Route::get('logout','logout')->middleware('auth:sanctum');
    // password reset
    Route::post('verify-api','forgetPassword')->middleware('guest')->name('verify-api');
});

Route::get('/email/verify/{id}/{hash}',[VerificationApiController::class,'verify'])->name('verification.verify');


Route::group(['middleware' => ['auth:sanctum']],function ()
{
    //Email
    Route::post('email/resend', [VerificationApiController::class,'resend'])->name('verificationapi.verify');

    //profile
    Route::get('/profile',[ProfileController::class,'index']);
    Route::put('/profile',[ProfileController::class,'update']);
    Route::post('/profile/forgotPassword',[ProfileController::class,'forgotPassword']);

    //bankAccount
    Route::get('/bank_account',[BankAccountController::class,'index']);
    Route::get('/bank_account/{bankAccount}',[BankAccountController::class,'show']);
    Route::post('/bank_account',[BankAccountController::class,'store']);
    Route::put('/bank_account/{bankAccount}',[BankAccountController::class,'update']);
    Route::delete('/bank_account/{bankAccount}',[BankAccountController::class,'destroy']);

    //settings
    Route::get('/settings',[SettingController::class,'index']);
    Route::post('/settings',[SettingController::class,'store']);
    Route::put('/settings/{setting}',[SettingController::class,'update']);

    //messages
    Route::post('messages',[MessageController::class,'store'])->name('messages.store');
    Route::get('messages',[MessageController::class,'show'])->name('messages.show');

    //notifications
    Route::get('notifications',[notificationController::class,'index'])->name('notifications.index');
    Route::get('notifications/unread',[notificationController::class,'unreadNotifications'])->name('notifications.un');
    Route::post('notifications/read',[notificationController::class,'read'])->name('notifications.read');

});
