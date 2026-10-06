<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(100)->create();

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'support@textorasms.com',
            'password' => bcrypt('Admin@456'),
            'role' => 'Admin',
        ]);
    }
}
