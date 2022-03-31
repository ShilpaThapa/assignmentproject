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
        $users=[
            ['search'=> ['email'=>'admin@gmail.com'], 'update'=> ['name'=>'Admin','password'=>bcrypt('admin@123'),'is_admin'=> 1]],       
            ['search'=>['email'=>'tom@gmail.com'],'update'=>['name'=>'Tom','password'=>bcrypt('tom@123'),'is_admin'=> 0]]                    
        ];
        foreach ($users as $user) {
            User::updateOrCreate($user['search'],$user['update']);
        }
    }
}
