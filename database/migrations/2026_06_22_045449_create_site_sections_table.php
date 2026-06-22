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
        Schema::create('site_sections', function (Blueprint $table) {
            $table->id();
            $table->string('section_name')->index(); // e.g., 'hero', 'video', 'features'
            $table->string('key'); // e.g., 'title', 'subtitle', 'background_image'
            $table->text('value')->nullable(); // The actual text or path to the file
            $table->string('type')->default('text'); // 'text', 'image', 'video'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_sections');
    }
};
