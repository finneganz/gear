<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configs')->truncate();

        $now = Carbon::now();
        DB::table('configs')->insert([
            [
                'user_id' => '1',
                'config' => '',
                'autoexec' => '',
                'windows_sensitivity' => '6/11',
                'ingame_sensitivity' => '2.3',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => '2',
                'config' => '',
                'autoexec' => '',
                'windows_sensitivity' => '6/11',
                'ingame_sensitivity' => '2.1',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => '3',
                'config' => '',
                'autoexec' => '',
                'windows_sensitivity' => '6/11',
                'ingame_sensitivity' => '2.0',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => '4',
                'config' => '',
                'autoexec' => '',
                'windows_sensitivity' => '6/11',
                'ingame_sensitivity' => '1.7',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => '5',
                'config' => '',
                'autoexec' => '',
                'windows_sensitivity' => '6/11',
                'ingame_sensitivity' => '1.55',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
