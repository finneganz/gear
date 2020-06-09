<?php

use Illuminate\Database\Seeder;

class HeadsetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headsets')->truncate();
        DB::table('headsets')->insert([
            [
                'headset_name' => 'Siberia V2',
                'maker_id' => 1,
            ],
            [
                'headset_name' => 'PRO X',
                'maker_id' => 2,
            ],
            [
                'headset_name' => 'KRAKEN',
                'maker_id' => 4,
            ],
            [
                'headset_name' => 'ROG Theta 7.1',
                'maker_id' => 5,
            ],
        ]);
    }
}
