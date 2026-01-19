<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 150);
            $table->string('email', 150);
            $table->string('contact', 30);
            $table->string('sujet', 200)->nullable();
            $table->text('message');
            $table->ipAddress('ip')->nullable(); // Pour stocker l'adresse IP
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
