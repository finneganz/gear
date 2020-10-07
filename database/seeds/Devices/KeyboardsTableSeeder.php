<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class KeyboardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keyboards')->truncate();
        
        $now = Carbon::now();
        DB::table('keyboards')->insert([
            // SteelSeries
            [
                'device_name' => 'APEX_PRO',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'APEX_PRO_TKL',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'APEX_7_RED_SWITCH',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'APEX_7_BLUE_SWITCH',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'APEX_7_BROWN_SWITCH',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'APEX_7_TKL_BROWN_SWITCH',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'APEX_7_TKL_BLUE_SWITCH',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'APEX_5',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'APEX_3',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Logicool
            [
                'device_name' => 'CRAFT',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'MX_Keys_for_Mac_Logicool_Master_Series',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'MX_KEYS',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Wireless_Illuminated_Keyboard_K800t',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Illuminated_Keyboard_k740',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'K840_MECHANICAL',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Keys_To_Go',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Wireless_Solar_Keyboard',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'K780_Multidevice_bluetooth',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Wireless_Keyboard_K360r',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Wireless_Touch_Keyboard_K400_Plus',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Bluetooth_Multi_Device_Keyboard_K480',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'K380_Multidevice_BLUETOOTH_Keyboard',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'K295_Silent_Wireless_Keyboard',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Wireless_Keyboard_K230',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Wireless_Keyboard_K275',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Wireless_Keyboard_K120',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Zowie
            [
                'device_name' => 'CELERITAS_II',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Razer
                // BlackWidow
            [
                'device_name' => 'BLACKWIDOW_V3',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'BLACKWIDOW_V3_PRO',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'BLACKWIDOW_V3_TENKEYLESS',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'BLACKWIDOW_LITE',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'BLACKWIDOW_ELITE',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'BLACKWIDOW_ULTIMATE',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'BLACKWIDOW',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // Cynosa
            [
                'device_name' => 'CYNOSA_V2',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'CYNOSA_CHROMA',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // Huntsman
            [
                'device_name' => 'HUNTSMAN_MINI',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'HUNTSMAN_ELITE',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'HUNTSMAN',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'HUNTSMAN_TE',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // Ortana
            [
                'device_name' => 'ORNATA_V2',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ORNATA_CHROMA',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // Tartarus
            [
                'device_name' => 'TARTARUS_PRO',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'TARTARUS_V2',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'TARTARUS_CHROMA',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // Free
            [
                'device_name' => 'ORBWEAVER_CHROMA',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'PRO_TYPE',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Asus
                // TUF
            [
                'device_name' => 'TUF_Gaming_K3',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'TUF_Gaming_K7',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'TUF_Gaming_K1',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // ROG-Strix
            [
                'device_name' => 'ROG_Strix_Scope_TKL',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_Flare',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_Flare_PNK_LTD',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_Scope',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // Free
            [
                'device_name' => 'ROG_Claymore',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
