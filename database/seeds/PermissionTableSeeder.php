<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'cota-list',
            'cota-create',
            'cota-edit',
            'cota-delete',
        ];
        foreach ($permissions as $permission)
        {

        }
    }
}
