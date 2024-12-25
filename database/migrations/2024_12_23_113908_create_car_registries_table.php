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
        Schema::create('car_registries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id');
            $table->foreignId('car_id');
            $table->string('type');
            $table->date('date_start'); // تاريخ الاستلام
            $table->decimal('kilo_start'); //عدد الكيلوات الحالية
            $table->date('date_end')->nullable(); // تاريخ التسليم
            $table->decimal('kilo_end')->nullable(); // عدد الكيلوات المستلمه

            $table->timestamps();
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_registries');
    }
};
