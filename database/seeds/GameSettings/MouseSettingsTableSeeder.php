<?php

use Illuminate\Database\Seeder;

class MouseSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mouse_settings')->truncate();
        DB::table('mouse_settings')->insert([
            [
                'user_id' => 1,
                'dpi' => 400,
                'polling_rate' => 1000,
            ],
            [
                'user_id' => 2,
                'dpi' => 500,
                'polling_rate' => 1000,
            ],
            [
                'user_id' => 3,
                'dpi' => 800,
                'polling_rate' => 1000,
            ],
            [
                'user_id' => 4,
                'dpi' => 1000,
                'polling_rate' => 1000,
            ],
            [
                'user_id' => 5,
                'dpi' => 1600,
                'polling_rate' => 1000,
            ],
        ]);

    }
}
