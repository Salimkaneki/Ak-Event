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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('userid'); // clé primaire ajoutée
            $table->unsignedInteger('creatorid')->nullable();
            $table->longText('firstname');
            $table->longText('lastname');
            $table->longText('phonenumber');
            $table->longText('address');
            $table->longText('email');
            $table->longText('password');
            $table->timestamps();

            // Ajout de la clé étrangère
            $table->foreign('creatorid')->references('creatorid')->on('creators')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
