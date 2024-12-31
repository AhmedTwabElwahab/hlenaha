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
        Schema::create('drivers', function (Blueprint $table)
        {
            $table->id();
            $table->string('name',255);
            $table->string('id_number',50);
            $table->string('province',255)->nullable();
            $table->string('city',255)->nullable();
            $table->string('neighborhood',255)->nullable();
            $table->string('street',255)->nullable();
            $table->integer('building_number',false,true)->nullable();
            $table->integer('postal_code',false,true)->nullable();
            $table->foreignId('user_id');
            $table->bigInteger('balance')->default(0);
            $table->string('image',255)->nullable();
            $table->string('national_address_image',255)->nullable(); //صورة العنوان الوطني
            $table->boolean('status')->default(0);

            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
