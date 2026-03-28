<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->string('home_features_title_line1')->nullable()->after('address_2');
            $table->string('home_features_title_highlight')->nullable()->after('home_features_title_line1');
            $table->json('home_features_blocks')->nullable()->after('home_features_title_highlight');
        });
    }

    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn([
                'home_features_title_line1',
                'home_features_title_highlight',
                'home_features_blocks',
            ]);
        });
    }
};
