<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Note;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'email'     => 'i@admin.com',
            'password'  => bcrypt('123456') //en laravel los password tienen una encriptacion y nos provee un metodo helper para generar ese password encriptado que es bcrypt tambien hay otra manera pero aca esta toda la informacion: https://laravel.com/docs/5.0/hashing
        ]);

        Note::factory(30)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
