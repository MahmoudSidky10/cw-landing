<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name'          => 'Admin',
                'email'         => 'admin@admin.com',
                'user_name'     => 'admin',
                'password'      => Hash::make('123456'),
                'user_type_id'  => 1,
                'employee_type' => 'admin',
            ]
        );
    }
}
