<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Holland',
            'email'=>'holland@gmail.com',
            'password'=>bcrypt('password#123'),
            'role_id'=> 1
        ]);
    }
}
