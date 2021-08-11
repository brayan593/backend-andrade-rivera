<?php

namespace Database\Seeders;

use App\Models\Catalogue;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthenticationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUsers();
    }

    function createUsers()
    {
        User::factory(10)->create();
    }
}