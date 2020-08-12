<?php

use App\Location;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'date' => Carbon::parse('22-08-2000'),
            'destination' => 'Jember',
            'user_id' => '1'
        ]);

        Location::create([
            'date' => Carbon::parse('22-08-2000'),
            'destination' => 'Sidoarjo',
            'user_id' => '1'
        ]);

        Location::create([
            'date' => Carbon::parse('22-08-2000'),
            'destination' => 'Jember',
            'user_id' => '2'
        ]);

        Location::create([
            'date' => Carbon::parse('22-08-2000'),
            'destination' => 'Sidoarjo',
            'user_id' => '2'
        ]);
    }
}
