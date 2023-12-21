<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Social::factory()->count(20)->create();
    }
}
