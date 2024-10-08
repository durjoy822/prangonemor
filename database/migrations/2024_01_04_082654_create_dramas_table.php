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
        Schema::create('dramas', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->nullable();
            $table->text('short_biography')->nullable();
            $table->string('director',100)->nullable();
            $table->string('writer',100)->nullable();
            $table->string('producer',100)->nullable();
            $table->string('music',100)->nullable();
            $table->string('makeup',100)->nullable();
            $table->string('sound',100)->nullable();
            $table->string('stage_designer',100)->nullable();
            $table->date('production_start_date')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->date('release_date')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->text('title_image')->nullable();
            $table->text('feature_image')->nullable();
            $table->text('slider_image')->nullable();
            $table->text('video_background_image')->nullable();
            $table->text('video_link')->nullable();
            $table->longText('description_one')->nullable();
            $table->longText('description_two')->nullable();
            $table->tinyInteger('drama_status')->default(1)->comment('1=Upcoming show , 2=Upcoming Production, 3 = Now showing, 4= Complete Show');
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
        Schema::dropIfExists('dramas');
    }
};