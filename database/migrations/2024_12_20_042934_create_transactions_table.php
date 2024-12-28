<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bank_account_id');
            $table->foreignId('driver_bank_account_id');
            $table->foreignId('driver_id');
            $table->decimal('amount',10,2,true);
            $table->decimal('fees',3,2,true)->default(0);
            $table->text('description');
            $table->date('date');
            $table->timestamps();

            $table->foreign('bank_account_id')->references('id')->on('bank_accounts');
            $table->foreign('driver_bank_account_id')->references('id')->on('bank_accounts');
            $table->foreign('driver_id')->references('id')->on('drivers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
