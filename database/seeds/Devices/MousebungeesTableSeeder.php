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
                'mousebungee_name' => 'MOUSE BUNGEE',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'mousebungee_name' => 'ZOWIE CAMADE',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'mousebungee_name' => 'Mouse Bungee V2',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
