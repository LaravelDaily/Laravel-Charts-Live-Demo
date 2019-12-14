<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$.QGLnCz.7BR0R8EGXE7WNO/kjeTC/rqEqpx4Nk7JVjMFtcgVht27W',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
