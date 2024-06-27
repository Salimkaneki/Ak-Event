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
            $table->unsignedInteger('userid');
            $table->unsignedInteger('eventid');
            $table->unsignedInteger('typeid');
            $table->integer('price');
            $table->integer('quantity');
            $table->timestamps();
        
            $table->foreign('userid')->references('userid')->on('users');
            $table->foreign('eventid')->references('eventid')->on('event');
            // Ajout de la clé étrangère pour typeid, assurez-vous que la table tickettype existe avec une colonne typeid correspondante
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
