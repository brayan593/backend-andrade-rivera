<?php

namespace Database\Seeders;

use App\Models\Catalogue;
use App\Models\Email;
use App\Models\Location;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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

    private function createUsers()
    {
            [
                User::factory(10)
                // ->has(Author::factory()->count(3), 'authors')
         
            ];

    function createRoles()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'guest']);
    }

     function createPermissions()
    {
        Permission::create(['name' => 'view-users']);
        Permission::create(['name' => 'store-users']);
        Permission::create(['name' => 'update-users']);
        Permission::create(['name' => 'delete-users']);

        Permission::create(['name' => 'download-files']);
        Permission::create(['name' => 'upload-files']);
        Permission::create(['name' => 'view-files']);
        Permission::create(['name' => 'update-files']);
        Permission::create(['name' => 'delete-files']);
    }

     function assignRolePermissions()
    {
        $role = Role::firstWhere('name', 'admin');
        $role->syncPermissions(Permission::get());
    }

     function assignUserRoles()
    {
        $user = User::find(1);
        $user->assignRole('admin');
    }

   }
}