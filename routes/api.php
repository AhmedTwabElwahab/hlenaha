<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BankAccountController;
use App\Http\Controllers\Api\DriverController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\UserController;
use App\Http\Middleware\CheckAdmin;


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
Route::group(['middleware' => ['auth:sanctum', CheckAdmin::class]],function (){


    //Driver
    Route::put('/driver/{driver}',[DriverController::class,'update']);
    Route::get('/driver/{driver}',[DriverController::class,'show']);

    //bankAccount
    Route::post('/bank_account',[BankAccountController::class,'store']);
    Route::put('/bank_account/{bankAccount}',[BankAccountController::class,'update']);
    Route::delete('/bank_account/{bankAccount}',[BankAccountController::class,'destroy']);

    //Transaction
    Route::get('/transaction',[TransactionController::class,'index']);
    Route::post('/transaction',[TransactionController::class,'store']);
    Route::put('/transaction/{transaction}',[TransactionController::class,'update']);
    Route::get('/transaction/{transaction}',[TransactionController::class,'show']);
    Route::delete('/transaction/{transaction}',[TransactionController::class,'destroy']);

});
