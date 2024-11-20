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
        $this->call(ConfigurationSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(TeamMemberSeeder::class);
        $this->call(CandidateSeeder::class);
        $this->call(CandidateSkillSeeder::class);
        $this->call(CandidateContactSeeder::class);
        $this->call(InterviewSeeder::class);
        $this->call(InterviewerSeeder::class);
        $this->call(InterviewerCommentSeeder::class);

    }
}