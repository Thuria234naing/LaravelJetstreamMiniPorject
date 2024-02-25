<?php

namespace Database\Seeders;

use App\Models\thuriya;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class thuriyaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        thuriya::factory()->count(7)->create();
    }
}
