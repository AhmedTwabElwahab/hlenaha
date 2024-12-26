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
        Schema::create('trips', function (Blueprint $table)
        {
            $table->id();
            $table->foreignId('driver_id');
            $table->foreignId('car_id');
            $table->boolean('status')->default(true);
            $table->date('date_start'); // تاريخ الاستلام
            $table->decimal('kilo_start',10,2); //عدد الكيلوات الحالية
            $table->date('date_end')->nullable(); // تاريخ التسليم
            $table->decimal('kilo_end',10,2)->nullable(); // عدد الكيلوات المستلمه

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
        Schema::dropIfExists('trips');
    }
};
