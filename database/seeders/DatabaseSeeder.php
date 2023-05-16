<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vote;
use App\Models\Election;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $candidates1 = Election::factory()->create();
        $candidates2 = Election::factory()->create();
        $candidates3 = Election::factory()->create();

        User::factory(4)->hasvote()->for($candidates1)->create();
        User::factory(4)->hasvote()->for($candidates2)->create();
        User::factory(4)->hasvote()->for($candidates3)->create();

        // $John = Election::factory()->create([
        //     'candidate' => 'John Mmadu',
        // ]);

        // $Micheal = Election::factory()->create([
        //     'candidate' => 'Micheal Agwu',
        // ]);

        // ;
        // $Micheal->hasVoters(10, Vote::factory());
        // $John->hasVoters(17, Vote::factory());


    }

}
