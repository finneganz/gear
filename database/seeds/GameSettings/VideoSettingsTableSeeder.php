<?php

use Illuminate\Database\Seeder;

class VideoSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('video_settings')->truncate();
        DB::table('video_settings')->insert([
            [
                'user_id' => 1,
                'resolution_id' => 1,
                'streatch' => 0,
                'anti_alias' => 0,
                'shadow_quality' => 0,
            ],
            [
                'user_id' => 2,
                'resolution_id' => 2,
                'streatch' => 1,
                'anti_alias' => 1,
                'shadow_quality' => 1,
            ],
            [
                'user_id' => 3,
                'resolution_id' => 3,
                'streatch' => 0,
                'anti_alias' => 2,
                'shadow_quality' => 2,
            ],
            [
                'user_id' => 4,
                'resolution_id' => 4,
                'streatch' => 1,
                'anti_alias' => 3,
                'shadow_quality' => 3,
            ],
            [
                'user_id' => 5,
                'resolution_id' => 5,
                'streatch' => 0,
                'anti_alias' => 4,
                'shadow_quality' => 4,
            ],
        ]);
    }
}
