<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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

        $now = Carbon::now();
        DB::table('mousepads')->insert([
            [
                'mousepad_name' => 'QCK_Heavy',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'mousepad_name' => 'POWERPLAY',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'mousepad_name' => 'G-SR',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'mousepad_name' => 'Razer_Mamba_Hyperflux',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'mousepad_name' => 'NC01-1A',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
