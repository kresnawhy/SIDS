<?php

use App\User;
use Carbon\Carbon;
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
            'name' => 'Wahyu Kresna Rachmadika',
            'NIK' => '3509212208000007',
            'birth_place' => 'Sidoarjo',
            'birth_date' => Carbon::parse('22-08-2000'),
            'religion' => 'Islam',
            'gender' => 'Laki - laki',
            'occupation' => 'Mahasiswa',
            'home_block' => 'C7',
            'home_number' => 12,
            'KTP' => 'https://via.placeholder.com/150',
            'email' => 'admin@sids.com',
            'password' => 'a',
            'old_password' => 'a',
            'remember_token' => null,
            'is_admin' => true
        ]);

        User::create([
            'id' => 2,
            'name' => 'Kresna Rachmadika',
            'NIK' => '3509212208000008',
            'birth_place' => 'Sidoarjo',
            'birth_date' => Carbon::parse('22-08-2000'),
            'religion' => 'Islam',
            'gender' => 'Laki - laki',
            'occupation' => 'Mahasiswa',
            'home_block' => 'C7',
            'home_number' => 12,
            'KTP' => 'https://via.placeholder.com/150',
            'email' => 'user@sids.com',
            'password' => 'a',
            'old_password' => 'a',
            'remember_token' => null,
        ]);
    }
}
