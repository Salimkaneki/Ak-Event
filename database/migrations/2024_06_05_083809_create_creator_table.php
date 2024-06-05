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
        Schema::create('creator', function (Blueprint $table) {
            $table->increments('creatorid');
            $table->integer('userid')->unsigned();
            $table->longText('name')->nullable();
            $table->longText('bio')->nullable();
            $table->longText('email')->nullable();
            $table->longText('password')->nullable();
            $table->timestamps();
        
            $table->foreign('userid')->references('userid')->on('user');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creator');
    }
};
