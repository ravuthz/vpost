<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Vannaravuth Yo',
                'email' => 'vannaravuthyo@gmail.com',
                'password' => '!123123'    
            ],
            [
                'name' => 'Ravuthz Yo',
                'email' => 'ravuthz@gmail.com',
                'password' => '@123123'    
            ]
        ];
        
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
