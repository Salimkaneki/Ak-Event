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
            $table->unsignedInteger('calendarid');
            $table->unsignedInteger('categoryid_'); // Utilisation de unsignedInteger
            $table->unsignedInteger('creatorid');
            $table->longText('title');
            $table->longText('description');
            $table->integer('ticketnumber');
            $table->longText('eventimage');
            $table->longText('eventvideo');
            $table->longText('location');
            $table->timestamps();

            // Définition des clés étrangères
            $table->foreign('calendarid')->references('calendarid')->on('calendar');
            $table->foreign('categoryid_')->references('categoryid_')->on('event_categories');
            $table->foreign('creatorid')->references('creatorid')->on('creators');
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
