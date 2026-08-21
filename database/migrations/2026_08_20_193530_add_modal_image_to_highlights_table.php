<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('highlights', function (Blueprint $table) {
            // Imagem exclusiva do pop-up (diferente da miniatura do card)
            $table->string('modal_image')->nullable()->after('image');
        });
    }

    public function down(): void
    {
        Schema::table('highlights', function (Blueprint $table) {
            $table->dropColumn('modal_image');
        });
    }
};
