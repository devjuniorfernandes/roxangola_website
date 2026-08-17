<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::table('leads', function (Blueprint $t) {
            if (! Schema::hasColumn('leads', 'is_read')) {
                $t->boolean('is_read')->default(false);
            }
        });
    }
    public function down(): void {
        Schema::table('leads', function (Blueprint $t) {
            if (Schema::hasColumn('leads', 'is_read')) $t->dropColumn('is_read');
        });
    }
};
