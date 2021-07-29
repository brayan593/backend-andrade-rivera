<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Office;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::factory(10)->create();
    }
}
