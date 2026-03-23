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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('address_2')->nullable();
            $table->timestamps();
        });

        // Insert default row
        \DB::table('site_settings')->insert([
            'phone'     => '+1 302-803-5506',
            'email'     => 'support@cyberwatch360.com',
            'address'   => '1007 N Orange St, 5302',
            'address_2' => 'Wilmington, DE 19801',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
