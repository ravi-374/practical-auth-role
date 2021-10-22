<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DefaultRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Admin',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Customer',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Manager',
                'guard_name' => 'web',
            ],
        ];

        Role::insert($data);
    }
}
