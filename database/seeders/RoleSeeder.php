<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=[
            ['name'=>'Admin','guard_name'=>'web'],
            ['name'=>'Contributer','guard_name'=>'web'],
            ['name'=>'Editor','guard_name'=>'web']
        ];
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
