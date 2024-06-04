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
        Schema::create('events', function (Blueprint $table) {
            $table->id('eventID');
            $table->string('creatorID');
            $table->string('eventTitle');
            $table->string('eventDetails');
            $table->string('eventImage');
            $table->string('eventVideo');
            $table->string('numberTickets');
            $table->date('date');
            $table->string('Location');
            $table->foreign('creatorID')->references('creatorID')->on('creators')->onDelete('cascade');
            $table->foreign('numberTickets')->references('numberTickets')->on('ticket_types')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
