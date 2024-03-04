<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'name' => 'Project 1',
                'description' => 'This is the first project.',
                'status' => 'nonpublic',
                'url' => 'https://example.com',
                'github' => '',
            ],
            [
                'name' => 'Project 2',
                'description' => 'This is the second project.',
                'status' => 'prerelease',
                'url' => 'https://example.com',
                'github' => '',
            ],
            [
                'name' => 'Project 3',
                'description' => 'This is the third project.',
                'status' => 'released',
                'url' => 'https://example.com',
                'github' => '',
            ],
            [
                'name' => 'Project 4',
                'description' => 'This is the fourth project.',
                'status' => 'released',
                'url' => 'https://example.com',
                'github' => '',
            ],
        ];
        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
