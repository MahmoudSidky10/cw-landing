<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // category and tags columns already applied manually
    }

    public function down(): void
    {
        Schema::table('blogs', function ($table) {
            $table->dropColumn('category');
        });
    }
};
