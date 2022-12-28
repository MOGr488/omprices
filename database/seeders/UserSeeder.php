<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
    
        $user = [
            [
                'id' => 1,
                'name'=> 'dev',
                'email'=>'dev@gmail.com',
                'email_verified_at'=> null,
                'password'=>bcrypt('123123123'),
            ]
        ];
        User::insert($user);
    }
}
