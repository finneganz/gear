<?php

use Illuminate\Database\Seeder;

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
        DB::table('monitor_settings')->insert([
            [
                'user_id' => 1,
                'setting_params' => 'hoge',
            ],
            [
                'user_id' => 2,
                'setting_params' => 'hogehoge',
            ],
            [
                'user_id' => 3,
                'setting_params' => 'fuga',
            ],
            [
                'user_id' => 4,
                'setting_params' => 'fugafuga',
            ],
            [
                'user_id' => 5,
                'setting_params' => 'hogefuga',
            ],
        ]);

    }
}
