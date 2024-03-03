<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tests = [
            ['test' => 1],
            ['test' => 2],
            ['test' => 3],
            ['test' => 4],
        ];

        foreach($tests as $test) {
            Test::create($test);
        }
    }
}
