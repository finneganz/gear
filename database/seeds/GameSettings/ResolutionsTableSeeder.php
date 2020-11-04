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
            // 4:3
            [
                'aspect' => 0,
                'resolution' => '640x480',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 0,
                'resolution' => '720x576',
                'created_at' => $now,
                'updated_at' => $now,
            ],
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
                'resolution' => '1152x864',
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
                'aspect' => 0,
                'resolution' => '1280x1024',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // 16:9
            [
                'aspect' => 1,
                'resolution' => '1176x664',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 1,
                'resolution' => '1280x720',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 1,
                'resolution' => '1360x768',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 1,
                'resolution' => '1366x768',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 1,
                'resolution' => '1600x960',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 1,
                'resolution' => '1768x992',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 1,
                'resolution' => '1920x1080',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // 16:10
            [
                'aspect' => 2,
                'resolution' => '720x480',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 2,
                'resolution' => '1280x768',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 2,
                'resolution' => '1280x800',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 2,
                'resolution' => '1600x1024',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'aspect' => 2,
                'resolution' => '1680x1050',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
