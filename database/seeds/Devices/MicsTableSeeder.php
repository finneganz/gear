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
            [
                'device_name' => 'Yeti',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'SEIREN_X',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Strix_Magnus',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
