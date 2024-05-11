<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::truncate();
        Role::truncate();

        $admin = Role::create(['name' => 'admin']);
        $admin->permissions()->create(['name' => 'create_course']);

        $tutor = Role::create(['name' => 'tutor']);
        $tutor->givePermissionTo('create_course');

        $user = Role::create(['name' => 'user']);
    }
}
