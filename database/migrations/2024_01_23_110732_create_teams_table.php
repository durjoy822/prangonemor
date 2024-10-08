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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('personal_info')->nullable();
            $table->string('experience')->nullable();
            $table->text('short_description')->nullable();
            $table->string('location')->nullable();
            $table->string('member_type')->comment('1=Founder,2=Primary,3=permanent,4=Associate ');
            $table->string('image')->nullable();
            $table->string('facebook')->nullable();
            $table->string('website')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkdin')->nullable();
            $table->string('youtube')->nullable();
            $table->longText('long_description')->nullable();

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
        Schema::dropIfExists('teams');
    }
};
