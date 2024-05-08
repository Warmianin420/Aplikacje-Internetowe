<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamMember::insert(
            [
                [
                    'role' => 'chorąży',
                    'team_id' => 1,
                    'user_id' => 1
                ]
            ]
        );
    }
}
