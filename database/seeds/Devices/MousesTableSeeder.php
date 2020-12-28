<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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

        $now = Carbon::now();
        DB::table('mouses')->insert([
            // Steelseries
                // RIVAL
            [
                'device_name' => 'RIVAL_3_WIRELESS',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'RIVAL_650_WIRELESS',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'RIVAL_600',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'RIVAL_3',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'RIVAL_310',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'RIVAL710',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'RIVAL500',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // Sensei
            [
                'device_name' => 'SENSEI',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'SENSEI_TEN',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'SENSEI_TEN_NEON_RIDER_EDITION',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'SENSEI310',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Logicool
            [
                'device_name' => 'G203',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G604',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G703',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G903',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G403',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G502',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G502_HERO',
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
                'device_name' => 'PRO_WIRELESS',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G603',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G402_HYPERION_FURY',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G304',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G600',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G300S',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Zowie
                // ZA
            [
                'device_name' => 'ZA_11',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ZA_12',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ZA_13',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // FK
            [
                'device_name' => 'FK1',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'FK2',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'FK1+',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // EC
            [
                'device_name' => 'EC1',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'EC2',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // S
            [
                'device_name' => 'S1',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'S2',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // S1-DIVINA
            [
                'device_name' => 'S1_DIVINA',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'S2_DIVINA',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Razer
            [
                'device_name' => 'DeathAdder_V2_PRO',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Viper_Ultimate',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Naga_Pro',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Pro_Click',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Naga_Left-Handed_Edition',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'DeathAdder_V2_mini',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Basilisk_Ultimate',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Viper_mini',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Atheris_Quartz_Edition',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Basilisk_V2',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'DeathAdder_V2',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Basilisk_X_HyperSpeed',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Mamba_Wireless_Gears5_Edition',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Viper',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Basilisk',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Atheris',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Basilisk_Essential',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Mamba_Wireless',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Mamba_Elite',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'DeathAdder_Essential',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Abyssus_Essential',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Mamba_hyperflux',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Lancehead',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Naga_Trinity',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'DeathAdder_Elite',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Mamba_Tournament_Edition_Gaming_Mouse',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // ASUS
                // Pugio
            [
                'device_name' => 'ROG_Pugio',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Pugio_2',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // Strix
            [
                'device_name' => 'ROG_Strix_Carry',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_Impact_2',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_Evolve',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_Impact',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // Gladius
            [
                'device_name' => 'ROG_Gladius_2_Origin_PNK_LTD',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Gradius_2_Wireless',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Gradius_2',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Gradius_2_Origin',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
                // Chakram
            [
                'device_name' => 'ROG_Chakram',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
