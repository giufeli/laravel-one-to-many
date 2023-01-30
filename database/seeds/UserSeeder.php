<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'name' => 'Marco',
                'email' => 'marcorossi@gmail.com',
                'password' => Hash::make('marco1234'),
            ],
            [
                'name' => 'Mario',
                'email' => 'mariobianchi@gmail.com',
                'password' => Hash::make('mario1234'),
            ],
            [
                'name' => 'Laura',
                'email' => 'lauraverdi@gmail.com',
                'password' => Hash::make('laura1234'),
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
