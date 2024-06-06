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
            $table->integer('userid');
            $table->longText('name');
            $table->longText('bio');
            $table->longText('email');
            $table->longText('password');
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
