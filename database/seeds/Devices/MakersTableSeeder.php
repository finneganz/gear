<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('makers')->truncate();

        $now = Carbon::now();
        DB::table('makers')->insert([
            [
                'maker_name' => 'SteelSeries',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'maker_name' => 'Logicool_G',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'maker_name' => 'Zowie',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'maker_name' => 'Razer',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'maker_name' => 'ASUS',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
