<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'mouse_id' => 1,
                'mousepad_id' => 1,
                'mousebungee_id' => 1,
                'keyboard_id' => 1,
                'headset_id' => 1,
                'mic_id' => 1,
                'monitor_id' => 1,
            ],
            [
                'mouse_id' => 2,
                'mousepad_id' => 2,
                'mousebungee_id' => 2,
                'keyboard_id' => 2,
                'headset_id' => 2,
                'mic_id' => 2,
                'monitor_id' => 2,
            ],
            [
                'mouse_id' => 3,
                'mousepad_id' => 3,
                'mousebungee_id' => 3,
                'keyboard_id' => 3,
                'headset_id' => 3,
                'mic_id' => 3,
                'monitor_id' => 3,
            ],
            [
                'mouse_id' => 4,
                'mousepad_id' => 4,
                'mousebungee_id' => 4,
                'keyboard_id' => 4,
                'headset_id' => 4,
                'mic_id' => 4,
                'monitor_id' => 4,
            ],
            [
                'mouse_id' => 5,
                'mousepad_id' => 5,
                'mousebungee_id' => 5,
                'keyboard_id' => 5,
                'headset_id' => 5,
                'mic_id' => 5,
                'monitor_id' => 5,
            ],
        ]);
    }
}
