<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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

        $now = Carbon::now();
        DB::table('headsets')->insert([
            [
                'headset_name' => 'Siberia V2',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'headset_name' => 'PRO X',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'headset_name' => 'KRAKEN',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'headset_name' => 'ROG Theta 7.1',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
