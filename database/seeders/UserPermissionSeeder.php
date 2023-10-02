<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'tenant-access']);
        Permission::create(['name' => 'admin-access']);
        Permission::create(['name' => 'waiter-access']);

        $super_admin_role = Role::create(['name' => 'super-admin']);
        $super_admin_role->givePermissionTo('waiter-access');
        $super_admin_role->givePermissionTo('tenant-access');
        $super_admin_role->givePermissionTo('admin-access');

        $admin_role = Role::create(['name' => 'admin']);
        $admin_role->givePermissionTo('admin-access');

        $tenant_role = Role::create(['name' => 'tenant']);
        $tenant_role->givePermissionTo('tenant-access');

        $waiter_role = Role::create(['name' => 'waiter']);
        $waiter_role->givePermissionTo('waiter-access');


        $users = User::all();

        foreach ($users as $user) {
            if($user->id == 1){
                $user->assignRole($super_admin_role);
            }
            else if($user->id >= 2 and $user->id <= 3){
                $user->assignRole($admin_role);
            }
            else if($user->id >= 4 and $user->id <= 14){
                $user->assignRole($tenant_role);
            }
            else if($user->id >= 15 and $user->id <= 35){
                $user->assignRole($waiter_role);
            }
        }
    }
}
