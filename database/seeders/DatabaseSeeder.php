<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\Experience;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Seed',
            'email' => 'seed@setup.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        if(App::isLocal()) {
            Experience::factory(3)->create();
            Education::factory(3)->create();
        }
    }
}
