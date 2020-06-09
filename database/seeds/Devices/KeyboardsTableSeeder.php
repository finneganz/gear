<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
        
        $now = Carbon::now();
        DB::table('keyboards')->insert([
            [
                'keyboard_name' => 'APEX PRO',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'keyboard_name' => 'PRO X',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'keyboard_name' => 'CELERITAS II',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'keyboard_name' => 'HUNTSMAN ELITE',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'keyboard_name' => 'ROG Strix Flare',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
