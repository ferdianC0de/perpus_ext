<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'role' => 'admin'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Petugas',
            'email' => 'petugas@email.com',
            'role' => 'petugas'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Siswa',
            'email' => 'siswa@email.com',
            'role' => 'siswa'
        ]);
    }
}
