<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('content_overrides', function (Blueprint $table) {
            $table->id();
            $table->string('key');                       // chave de tradução (ex.: home.explore.title) ou slot de imagem
            $table->string('locale', 5)->nullable();     // pt / en para texto; null para imagens (partilhado)
            $table->string('type', 20)->default('text'); // text | image
            $table->text('value')->nullable();           // texto traduzido ou caminho da imagem (storage/...)
            $table->timestamps();

            $table->unique(['key', 'locale', 'type']);
            $table->index(['type', 'locale']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('content_overrides');
    }
};
