<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\SeoProperty;

class SeoPropertiesTableSeeder extends Seeder
{


    public function run()
    {
        SeoProperty::factory()->count(20)->create();
    }
}
