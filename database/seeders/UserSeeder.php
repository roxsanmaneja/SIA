<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'name' => 'Roxsan C. Maneja',
                'email' => 'roxsanmaneja@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('pass12345')
            ],
            [
                'name' => 'Carl Jeric Fronteras',
                'email' => 'carl_j@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('pass12345')
            ],[
                'name' => 'Jelyn Obguia',
                'email' => 'jelyn@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('pass12345')
            ],[
                'name' => 'Kiray Celis',
                'email' => 'kiray_celis@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('pass12345')
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}

        