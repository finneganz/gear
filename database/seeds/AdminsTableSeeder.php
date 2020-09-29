<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        $now = Carbon::now();

        DB::table('admins')->insert([
            [
                // yasuha
                'user_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                // finnegantz
                'user_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
