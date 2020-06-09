<?php

use Illuminate\Database\Seeder;

class KeyboardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keyboards')->truncate();
        DB::table('keyboards')->insert([
            [
                'keyboard_name' => 'APEX PRO',
                'maker_id' => 1,
            ],
            [
                'keyboard_name' => 'PRO X',
                'maker_id' => 2,
            ],
            [
                'keyboard_name' => 'CELERITAS II',
                'maker_id' => 3,
            ],
            [
                'keyboard_name' => 'HUNTSMAN ELITE',
                'maker_id' => 4,
            ],
            [
                'keyboard_name' => 'ROG Strix Flare',
                'maker_id' => 5,
            ],
        ]);
    }
}
