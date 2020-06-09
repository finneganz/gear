<?php

use Illuminate\Database\Seeder;

class MousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mouses')->truncate();
        DB::table('mouses')->insert([
            [
                'mouse_name' => 'RIVAL 600',
                'maker_id' => 1,
            ],
            [
                'mouse_name' => 'G304',
                'maker_id' => 2,
            ],
            [
                'mouse_name' => 'ZA 13',
                'maker_id' => 3,
            ],
            [
                'mouse_name' => 'DeathAdder V2',
                'maker_id' => 4,
            ],
            [
                'mouse_name' => 'ROG Gradius Ⅱ',
                'maker_id' => 5,
            ],
        ]);
    }
}
