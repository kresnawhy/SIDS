<?php

use App\Letter;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LettersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Letter::create([
            'description' => 'Kebutuhan mendaftar beasiswa',
            'user_id' => '1'
        ]);

        Letter::create([
            'description' => 'Surat miskin',
            'user_id' => '2'
        ]);
    }
}
