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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id('purchaseID');
            $table->string('userID');
            $table->string('ticketTypeID');
            $table->string('eventID');
            $table->string('pricePurchase');
            $table->datetime('datePurchase');
            $table->string('status');
            $table->primary(['userID', 'ticketTypeID', 'eventID']);
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ticketTypeID')->references('ticketTypeID')->on('ticket_types')->onDelete('cascade');
            $table->foreign('eventID')->references('eventID')->on('events')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
