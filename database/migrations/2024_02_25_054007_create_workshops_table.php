<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('title_image')->nullable();
            $table->text('feature_image')->nullable();
            $table->text('video_image')->nullable();
            $table->text('video_link')->nullable();  
            $table->longText('description_one')->nullable(); 
            $table->longText('description_two')->nullable(); 
            $table->date('date')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->tinyInteger('status')->default(1); 
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
        Schema::dropIfExists('workshops');
    }
};
