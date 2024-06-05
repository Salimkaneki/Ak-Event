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
        Schema::create('event', function (Blueprint $table) {
            $table->increments('eventid');
            $table->integer('calendarid')->unsigned();
            $table->integer('categoryid_')->unsigned();
            $table->integer('creatorid')->unsigned();
            $table->longText('title')->nullable();
            $table->longText('description')->nullable();
            $table->integer('ticketnumber')->nullable();
            $table->longText('eventimage')->nullable();
            $table->longText('eventvideo')->nullable();
            $table->longText('location')->nullable();
            $table->timestamps();
        
            $table->foreign('calendarid')->references('calendarid')->on('calendar');
            $table->foreign('categoryid_')->references('categoryid_')->on('eventcategories');
            $table->foreign('creatorid')->references('creatorid')->on('creator');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};