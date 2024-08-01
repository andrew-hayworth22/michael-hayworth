<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\Experience;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Andy',
            'email' => 'andy.hayworth@outlook.com',
        ]);

        if(App::isLocal()) {
            Experience::factory(3)->create();
            Education::factory(3)->create();
        }
    }
}
