<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ConfigsTableSeeder::class,
            MonitorSettingsTableSeeder::class,
            MouseSettingsTableSeeder::class,
            ResolutionsTableSeeder::class,
            VideoSettingsTableSeeder::class,
            HeadsetsTableSeeder::class,
            KeyboardsTableSeeder::class,
            MakersTableSeeder::class,
            MicsTableSeeder::class,
            MonitorsTableSeeder::class,
            MousebungeesTableSeeder::class,
            MousepadsTableSeeder::class,
            MousesTableSeeder::class,
        ]);
    }
}
