<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();

            // Étape 1 - Identité
            $table->string('societe');
            $table->string('adresse')->nullable();
            $table->string('raisonsocial')->nullable();
            $table->string('rccm')->nullable();
            $table->string('ville')->nullable();
            $table->string('activite');

            // Étape 2 - Compte
            $table->string('username')->nullable();
            $table->string('expediteur', 11)->nullable();
            $table->unsignedInteger('nbcompte')->default(0);
            $table->decimal('montant', 12, 2)->nullable();

            // Étape 3 - Contact
            $table->string('nom')->nullable();
            $table->string('fonction')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable();

            // Étape 4 - Finalisation
            $table->text('complementaire')->nullable();
            $table->string('captcha');
            $table->boolean('validation')->default(false);

            // Meta
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
