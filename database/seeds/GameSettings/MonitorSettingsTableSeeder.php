<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MonitorSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monitor_settings')->truncate();

        $now = Carbon::now();
        DB::table('monitor_settings')->insert([
            [
                'user_id' => 1,
                'setting_params' => 'hoge',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 2,
                'setting_params' => 'hogehoge',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 3,
                'setting_params' => 'fuga',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 4,
                'setting_params' => 'fugafuga',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 5,
                'setting_params' => 'hogefuga',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);

    }
}
