<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MousebungeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mousebungees')->truncate();

        $now = Carbon::now();
        DB::table('mousebungees')->insert([
            [
                'device_name' => 'MOUSE_BUNGEE',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ZOWIE_CAMADE',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Mouse_Bungee_V2',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
