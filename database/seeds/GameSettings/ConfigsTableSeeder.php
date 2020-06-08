<?php

use Illuminate\Database\Seeder;

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
        DB::table('configs')->insert([
            [
                'user_id' => '1',
                'config_filepath' => 'http/test.com1-1',
                'autoexec_filepath' => 'http/test.com1-2',
                'windows_sensitivity' => '6/11',
                'ingame_sensitivity' => '2.3',
            ],
            [
                'user_id' => '2',
                'config_filepath' => 'http/test.com2-1',
                'autoexec_filepath' => 'http/test.com2-2',
                'windows_sensitivity' => '6/11',
                'ingame_sensitivity' => '2.1',
            ],
            [
                'user_id' => '3',
                'config_filepath' => 'http/test.com3-1',
                'autoexec_filepath' => 'http/test.com3-2',
                'windows_sensitivity' => '6/11',
                'ingame_sensitivity' => '2.0',
            ],
            [
                'user_id' => '4',
                'config_filepath' => 'http/test.com4-1',
                'autoexec_filepath' => 'http/test.com4-2',
                'windows_sensitivity' => '6/11',
                'ingame_sensitivity' => '1.7',
            ],
            [
                'user_id' => '5',
                'config_filepath' => 'http/test.com5-1',
                'autoexec_filepath' => 'http/test.com5-2',
                'windows_sensitivity' => '6/11',
                'ingame_sensitivity' => '1.55',
            ],
        ]);
    }
}
