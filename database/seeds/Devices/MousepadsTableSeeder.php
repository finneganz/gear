<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MousepadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mousepads')->truncate();

        $now = Carbon::now();
        DB::table('mousepads')->insert([
            // SteelSeries
            [
                'device_name' => 'QCK_PRISM_CLOTH_X',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_PRISM_CLOTH_4XL',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_PRISM_CLOTH_5XL',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_PRISM_CLOTH_3XL',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_PRISM_CLOTH_MEDIUM',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_PRISM_CLOTH(XL)_NEON_RIDER_EDITION',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_MEDIUM',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_LARGE',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_3XL',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_4XL',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_5XL',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_SMALL',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_LARGE_NEON_RIDER_EDITION',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_EDGE_LARGE',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_EDGE_XL',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_EDGE_MEDIUM',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_HEAVY_LARGE',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_HEAVY_MEDIUM',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_HEAVY_XXL',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_HARD_PAD',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_G_FUEL_EDITION',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_FAZE_CLAN_EDITION',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_PRISM',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'QCK_VECTOR',
                'maker_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Logicool
            [
                'device_name' => 'G640',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G240',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G440',
                'maker_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Zowie
            [
                'device_name' => 'G-SR',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'G-SR-SE(DEEP BLUE)',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'P-SR',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'GTF_X',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'PTF_X',
                'maker_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Razer
            [
                'device_name' => 'Razer_Pro_Glide',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Razer_Acari',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Razer_Gigantsus_V2',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Razer_Firefly_V2',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Razer_Goliathus_Extended_Chroma_Gears5_Edition',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Razer_Goliathus_Extended_Chroma',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Razer_Mamba_Hyperflux',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Razer_Vespula_V2',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Razer_Goliathus_Mobile_Stealth_Edition',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Razer_Sphex_V2',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Razer_Gigantus',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Razer_Goliathus_Speed',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Razer_Goliathus_Control',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'Razer_Goliathus_Mobile',
                'maker_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // ASUS
            [
                'device_name' => 'ROG_Strix_Slice_Mousepad',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Sheath_PNK_LTD',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Balteus_Qi',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Strix_Edge',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'device_name' => 'ROG_Shealth',
                'maker_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
