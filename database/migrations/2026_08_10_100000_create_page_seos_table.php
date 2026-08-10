<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('page_seos', function (Blueprint $table) {
            $table->id();
            $table->string('page_key')->unique();   // corresponde ao route name (ex.: home, rox01, sobre.marca)
            $table->string('label')->nullable();     // nome legível no painel admin
            $table->string('title_pt')->nullable();
            $table->string('title_en')->nullable();
            $table->text('description_pt')->nullable();
            $table->text('description_en')->nullable();
            $table->string('h1_pt')->nullable();
            $table->string('h1_en')->nullable();
            $table->text('keywords')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_seos');
    }
};
