<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'category', 
            'category-create', 
            'category-edit', 
            'category-delete', 
            'product',
            'product-create',
            'product-edit',
            'product-delete',
            'user',
            'user-create',
            'user-edit',
            'user-delete',
        ];

        foreach ($permissions as $permissionName) {
            Permission::create(['name' => $permissionName]);
        }

    }
}
