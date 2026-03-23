<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $table    = 'site_settings';
    protected $fillable = ['phone', 'email', 'address', 'address_2'];

    /** Always returns the single settings row, creating it if missing */
    public static function instance(): static
    {
        return static::firstOrCreate([], [
            'phone'     => '',
            'email'     => '',
            'address'   => '',
            'address_2' => '',
        ]);
    }
}
