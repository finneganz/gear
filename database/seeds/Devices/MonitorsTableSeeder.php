<?php

use Illuminate\Database\Seeder;

class MonitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monitors')->truncate();
        DB::table('monitors')->insert([
            [
                'monitor_name' => 'XL2546',
                'maker_id' => 3,
            ],
            [
                'monitor_name' => 'Razer Raptop 27',
                'maker_id' => 4,
            ],
            [
                'monitor_name' => 'SWIFT PG258Q',
                'maker_id' => 5,
            ],
        ]);
    }
}
