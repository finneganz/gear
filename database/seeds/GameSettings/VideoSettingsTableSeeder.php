<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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

        $now = Carbon::now();
        DB::table('video_settings')->insert([
            [
                'user_id' => 1,
                'resolution_id' => 1,
                'stretch' => 0,
                'anti_alias' => 0,
                'shadow_quality' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 2,
                'resolution_id' => 2,
                'stretch' => 1,
                'anti_alias' => 1,
                'shadow_quality' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 3,
                'resolution_id' => 3,
                'stretch' => 0,
                'anti_alias' => 2,
                'shadow_quality' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 4,
                'resolution_id' => 4,
                'stretch' => 1,
                'anti_alias' => 3,
                'shadow_quality' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 5,
                'resolution_id' => 5,
                'stretch' => 0,
                'anti_alias' => 4,
                'shadow_quality' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
