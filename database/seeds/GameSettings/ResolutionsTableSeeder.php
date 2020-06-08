<?php

use Illuminate\Database\Seeder;

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
        DB::table('resolutions')->insert([
            [
                'aspect' => 0,
                'resolution' => '800x600',
            ],
            [
                'aspect' => 0,
                'resolution' => '1024x768',
            ],
            [
                'aspect' => 0,
                'resolution' => '1280x960',
            ],
            [
                'aspect' => 2,
                'resolution' => '1280x720',
            ],
            [
                'aspect' => 2,
                'resolution' => '1600x960',
            ],
            [
                'aspect' => 2,
                'resolution' => '1920x1080',
            ],
        ]);
    }
}
