<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mics')->truncate();

        $now = Carbon::now();
        DB::table('mics')->insert([
            // Logicool
                // Yeti
            [
                'device_name' => 'Yeti',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Yeti_Nano',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Yeti_Pro',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Snowball_iCE',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Razer
                // Seiren
            [
                'device_name' => 'SEIREN_X',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'SEIREN_ELITE',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'SEIREN_EMOTE',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // ASUS
            [
                'device_name' => 'ROG_Strix_Magnus',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
