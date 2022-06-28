<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
                'name'=> 'ike beluga',
                'email'=> 'ikebegula@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('test123456')
            ],
            [
                'name'=> 'jay calamba',
                'email'=> 'jcalamba@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('test123456')
            ],

            [
                'name'=> 'godwin atabs',
                'email'=> 'godswards@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('test123456')
            ],
            [
                'name'=> 'dominic diez',
                'email'=> 'dominicdiez@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('test123456')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
