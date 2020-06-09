<?php

use Illuminate\Database\Seeder;

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
        DB::table('makers')->insert([
            [
                'maker_name' => 'SteelSeries',
            ],
            [
                'maker_name' => 'Logicool G',
            ],
            [
                'maker_name' => 'Zowie',
            ],
            [
                'maker_name' => 'Razer',
            ],
            [
                'maker_name' => 'ASUS',
            ],
        ]);
    }
}
