<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BankAccountController;
use App\Http\Controllers\Api\DriverController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;


Route::controller(AuthController::class)->group(function ()
{
    Route::get('/login','index')->name('login');

    Route::post('/login','login')->name('login');
    Route::get('logout','logout')->middleware('auth:sanctum');
    // password reset
    Route::post('verify-api','forgetPassword')->middleware('guest')->name('verify-api');
});

//الاعدادات
// اضافة حساب
// الرسائل
// الاشعارات
// تعديل البروفايل
Route::group(['middleware' => ['auth:sanctum']],function (){


    //Driver
    Route::put('/driver/{driver}',[DriverController::class,'update']);
    Route::get('/driver/{driver}',[DriverController::class,'show']);

    //bankAccount
    Route::get('/bank_account/{bankAccount}',[BankAccountController::class,'show']);
    Route::post('/bank_account',[BankAccountController::class,'store']);
    Route::put('/bank_account/{bankAccount}',[BankAccountController::class,'update']);
    Route::delete('/bank_account/{bankAccount}',[BankAccountController::class,'destroy']);

    //settings
    Route::get('/settings',[SettingController::class,'index']);
    Route::post('/settings',[SettingController::class,'store']);
    Route::put('/settings/{setting}',[SettingController::class,'update']);

});
