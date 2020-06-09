<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
        
        $now = Carbon::now();
        DB::table('mouse_settings')->insert([
            [
                'user_id' => 1,
                'dpi' => 400,
                'polling_rate' => 1000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 2,
                'dpi' => 500,
                'polling_rate' => 1000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 3,
                'dpi' => 800,
                'polling_rate' => 1000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 4,
                'dpi' => 1000,
                'polling_rate' => 1000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 5,
                'dpi' => 1600,
                'polling_rate' => 1000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);

    }
}
