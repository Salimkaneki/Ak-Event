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
        Schema::create('ticket', function (Blueprint $table) {
            $table->increments('ticketid');
            $table->integer('userid')->unsigned();
            $table->integer('eventid')->unsigned();
            $table->integer('typeid')->unsigned();
            $table->integer('price');
            $table->integer('quantity');
            $table->timestamps();
        
            $table->foreign('userid')->references('userid')->on('user');
            $table->foreign('eventid')->references('eventid')->on('event');
            $table->foreign('typeid')->references('typeid')->on('tickettype');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket');
    }
};
