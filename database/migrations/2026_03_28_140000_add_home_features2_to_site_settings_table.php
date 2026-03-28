<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->string('home_features2_title_line1')->nullable()->after('home_features_blocks');
            $table->string('home_features2_title_highlight')->nullable()->after('home_features2_title_line1');
            $table->string('home_features2_hero_image')->nullable()->after('home_features2_title_highlight');
            $table->string('home_features2_hero_alt')->nullable()->after('home_features2_hero_image');
            $table->json('home_features2_cards')->nullable()->after('home_features2_hero_alt');
        });
    }

    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn([
                'home_features2_title_line1',
                'home_features2_title_highlight',
                'home_features2_hero_image',
                'home_features2_hero_alt',
                'home_features2_cards',
            ]);
        });
    }
};
