<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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

        $now = Carbon::now();
        DB::table('monitors')->insert([
            [
                'monitor_name' => 'XL2546',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'monitor_name' => 'Razer_Raptop_27',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'monitor_name' => 'SWIFT_PG258Q',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
