<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('highlights', function (Blueprint $table) {
            $table->text('excerpt')->nullable()->after('title');
            $table->text('excerpt_en')->nullable()->after('excerpt');
            $table->longText('body')->nullable()->after('excerpt_en');
            $table->longText('body_en')->nullable()->after('body');
            $table->date('published_at')->nullable()->after('body_en');
        });
    }

    public function down(): void
    {
        Schema::table('highlights', function (Blueprint $table) {
            $table->dropColumn(['excerpt', 'excerpt_en', 'body', 'body_en', 'published_at']);
        });
    }
};
