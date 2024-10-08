<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drama_id')->comment('dramas Auto Id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable(); 
            $table->unsignedBigInteger('price_id')->comment('drama_prices Auto Id'); 
            $table->tinyInteger('status')->default(1)->comment('1=pending,2=approved,3=canceled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
