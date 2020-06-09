<?php

use Illuminate\Database\Seeder;

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
        DB::table('mics')->insert([
            [
                'mic_name' => 'Yeti',
                'maker_id' => 2,
            ],
            [
                'mic_name' => 'SEIREN X',
                'maker_id' => 4,
            ],
            [
                'mic_name' => 'Strix Magnus',
                'maker_id' => 5,
            ],
        ]);
    }
}
