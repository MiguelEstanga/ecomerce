<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RollPermision extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'superadmin']);
        $role2 = Role::create(['name' => 'admin']);
        $role3 = Role::create(['name' => 'user']);
        
        Permission::create(['name' => 'superadmin'])->assignRole($role);
        Permission::create(['name' => 'admin'])->syncRoles([$role , $role2]);
        Permission::create(['name' => 'user'])->syncRoles([$role , $role2, $role3]);
      
    }
}
