<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HeadsetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headsets')->truncate();

        $now = Carbon::now();
        DB::table('headsets')->insert([
            // SteelSeries
                // ARCTIS
            [
                'device_name' => 'ARCTIS_9_WIRELESS',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_1_FOR_XBOX',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_1_WIRELESS',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_1_WIRELESS',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_PRO_WIRELESS',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_PRO_WIRELESS_WHITE',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_1_WIRELESS_FOR_PLAYSTATION',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_9X',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_7_WHITE',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_7_BLACK',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_3_BLUETOOTH',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_PRO',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_5',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_5_WHITE',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_1_FOR_PLAYSTATION',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_1_WIRELESS_FOR_SWITCH',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_3_BLACK',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_3_CONSOLE',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_1',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_1_WIRELESS_FOR_XBOX_CYBERPUNK_EDITION',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ARCTIS_1_WIRELESS_CYBERPUNK_EDITION',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // SIBERIA
            [
                'device_name' => 'SIBERIA_V1',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'SIBERIA_V2',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'SIBERIA_V3',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'SIBERIA_ELITE',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Logicool
            [
                'device_name' => 'G733',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'PRO_X_WIRELESS',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'PRO_X',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'PRO',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G933S',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G633S',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G533_WIRELESS',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G433',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G431',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G331',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G35',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G560',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Razer
                // BLACKSHARK
            [
                'device_name' => 'BLACKSHARK_V2',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'BLACKSHARK_V2_X',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'BLACKSHARK_V2_PRO',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // KRAKEN
            [
                'device_name' => 'KRAKEN_X_USB',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'KRAKEN_X',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'KRAKEN_TOURNAMENT_EDITION',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // ELECTRA
            [
                'device_name' => 'ELECTRA_V2',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ELECTRA_V2_USB',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // THRESHER
            [
                'device_name' => 'THRESHER_ULTIMATE_FOR_PS4',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'THRESHER_ULTIMATE_FOR_XBOX_ONE',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'THRESHER_FOR_PS4',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'THRESHER7.1',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'THRESHER',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'THRESHER_TE',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // TIAMAT
            [
                'device_name' => 'TIAMAT_7.1_V2',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'TIAMAT_2.2_V2',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Theta7.1',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // FREE
            [
                'device_name' => 'OPUS',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'NARI',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // ASUS
                // Strix
            [
                'device_name' => 'ROG_Strix_GO2.4',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_Wireless',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // Delta
            [
                'device_name' => 'ROG_Delta_White_Edition',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Delta',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // Strix-Fusion
            [
                'device_name' => 'ROG_Strix_Fusion700',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_Fusion300',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_Fusion500',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // Free
            [
                'device_name' => 'ROG_Centurion',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Theta7.1',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
