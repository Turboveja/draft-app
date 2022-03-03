<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermisionSuiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user permissions
        $permission_1 = Permission::create(['name' => 'edit users']);
        $permission_2 = Permission::create(['name' => 'delete users']);
        $permission_3 = Permission::create(['name' => 'list users']);
        $permission_4 = Permission::create(['name' => 'create users']);
        $permission_5 = Permission::create(['name' => 'show users']);
        $user_permissions = [
            $permission_1,
            $permission_2,
            $permission_3,
            $permission_4,
            $permission_5,
        ];

        //category permissions
        $permission_6 = Permission::create(['name' => 'edit category']);
        $permission_7 = Permission::create(['name' => 'delete category']);
        $permission_8 = Permission::create(['name' => 'list category']);
        $permission_9 = Permission::create(['name' => 'create category']);
        $permission_10 = Permission::create(['name' => 'show category']);
        $category_permissions = [
            $permission_6,
            $permission_7,
            $permission_8,
            $permission_9,
            $permission_10,
        ];

        //product permissions
        $permission_11 = Permission::create(['name' => 'edit products']);
        $permission_12 = Permission::create(['name' => 'delete products']);
        $permission_13 = Permission::create(['name' => 'list products']);
        $permission_14 = Permission::create(['name' => 'create products']);
        $permission_15 = Permission::create(['name' => 'show products']);
        $product_permissions = [
            $permission_11,
            $permission_12,
            $permission_13,
            $permission_14,
            $permission_15,
        ];

        //create roles and assign existing permissions
        $role1 = Role::create(['name' => 'admin']);
        $role1->syncPermissions(collect(array_merge($product_permissions, $category_permissions, $user_permissions)));

        $role2 = Role::create(['name' => 'moderator']);
        $role2->syncPermissions(collect(array_merge($product_permissions, $category_permissions)));

        $role3 = Role::create(['name' => 'comercial']);
        $role3->givePermissionTo('edit products');
        $role3->givePermissionTo('delete products');
        $role3->givePermissionTo('list products');
        $role3->givePermissionTo('create products');
        $role3->givePermissionTo('show products');
    }
}
