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
        Schema::create('work_prangonmors', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); 
            $table->text('image')->nullable();    
            $table->longText('description')->nullable();   
            $table->date('date')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
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
        Schema::dropIfExists('work_prangonmors');
    }
};
