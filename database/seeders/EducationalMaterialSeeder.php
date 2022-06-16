<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EducationalMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\EducationalMaterial::factory(100)->create();
    }
}
