<?php

use Illuminate\Database\Seeder;

class MousepadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mousepads')->truncate();
        DB::table('mousepads')->insert([
            [
                'mousepad_name' => 'QCK Heavy',
                'maker_id' => 1,
            ],
            [
                'mousepad_name' => 'POWERPLAY',
                'maker_id' => 2,
            ],
            [
                'mousepad_name' => 'G-SR',
                'maker_id' => 3,
            ],
            [
                'mousepad_name' => 'Razer Mamba Hyperflux',
                'maker_id' => 4,
            ],
            [
                'mousepad_name' => 'NC01-1A',
                'maker_id' => 5,
            ],
        ]);
    }
}
