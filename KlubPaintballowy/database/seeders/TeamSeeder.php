<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::insert(
            [
                [
                    'name' => 'Drużyna 1',
                    'description' => 'Drużyna 1 to jedna z lepszych drużyn.'
                ]
            ]
        );
    }
}
