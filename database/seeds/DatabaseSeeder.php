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
            UsersTableSeeder::class,
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
            MousepadTableSeeder::class,
            MousesTableSeeder::class,
        ]);
    }
}
