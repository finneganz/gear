<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ResolutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resolutions')->truncate();

        $now = Carbon::now();
        DB::table('resolutions')->insert([
            [
                'aspect' => 0,
                'resolution' => '800x600',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 0,
                'resolution' => '1024x768',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 0,
                'resolution' => '1280x960',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 2,
                'resolution' => '1280x720',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 2,
                'resolution' => '1600x960',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 2,
                'resolution' => '1920x1080',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
