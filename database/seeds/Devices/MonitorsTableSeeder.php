<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MonitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monitors')->truncate();

        $now = Carbon::now();
        DB::table('monitors')->insert([
            // Zowie
                // XL
            [
                'device_name' => 'XL2546',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'XL2411P',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'XL2746S',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'XL2546S',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Razer
            [
                'device_name' => 'Razer_Raptop_27',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // ASUS
            [
                'device_name' => 'ROG_Swift_360Hz_PG259QN',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_SWIFT_PG35VQ',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_SWIFT_PG27VQ',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_SWIFT_PG27UQ',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_SWIFT_PG248Q',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_SWIFT_PG348Q',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_SWIFT_PG27AQ',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_SWIFT_PG279Q',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_XG49VQ',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_XG32VQR',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_XG35VQ',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_XG258Q',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_XG27VQ',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_XG17AHPE',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VG245HEY',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VG258QR',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VG258Q',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VG245HE',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VG245H',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VP228H',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VP228HE',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VP278H',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'TUF_GAMING_VG27VQ',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'TUF_GAMING_VG32VQ',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'TUF_GAMING_VG27AQ',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'TUF_GAMING_VG279QM',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VG258QR-J',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VG278QR-J',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VG275Q',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VG278QR',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VG279Q',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VG245HE-J',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VG245HE-DP',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VL278H',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VP248H',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VP248QGL',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VP278QGL',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VP28UQG',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VA326H',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'VE248HR',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
