<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@sids.com',
            'password' => bcrypt('a'),
            'remember_token' => null,
            'is_admin' => true
        ]);

        User::create([
            'id' => 2,
            'name' => 'Kresna',
            'email' => 'krach22official@gmail.com',
            'password' => bcrypt('a'),
            'remember_token' => null,
        ]);
    }
}
