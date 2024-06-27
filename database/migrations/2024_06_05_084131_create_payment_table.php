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
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('paymentid'); // clé primaire ajoutée
            $table->integer('ticketid')->unsigned();
            $table->integer('amount');
            $table->date('paymentdate')->nullable();
            $table->longText('paymentmethod')->nullable();
            $table->longText('status')->nullable();
            $table->timestamps();
        
            $table->foreign('ticketid')->references('ticketid')->on('ticket');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
