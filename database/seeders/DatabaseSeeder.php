<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vote;
use App\Models\Election;
use App\Models\User;
use App\Models\Voter;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        Voter::factory(4)
            ->hasvote()
            ->hascomment()
        ->create();


        Election::factory()->create();









    }

}
