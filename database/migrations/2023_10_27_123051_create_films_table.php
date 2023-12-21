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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre',100);
            $table->string('genre',255);
            $table->string('année',10);
            $table->string('realisateur',100);
            $table->string('duree',100);
            $table->string('Type',255);
            $table->string('Brand',255);
            $table->string('Cote',255);
            $table->string('Rating',255);
            $table->string('Langues',255);
            $table->string('Soustitres',255);
            $table->string('Personnes',255);
            $table->string('description',255);
            $table->string('image',255);
            $table->string('video',255);
           
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
