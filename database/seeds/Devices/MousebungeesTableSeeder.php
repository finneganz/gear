<?php

use Illuminate\Database\Seeder;

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
        DB::table('mousebungees')->insert([
            [
                'mousebungee_name' => 'MOUSE BUNGEE',
                'maker_id' => 1,
            ],
            [
                'mousebungee_name' => 'ZOWIE CAMADE',
                'maker_id' => 3,
            ],
            [
                'mousebungee_name' => 'Mouse Bungee V2',
                'maker_id' => 4,
            ],
        ]);
    }
}
