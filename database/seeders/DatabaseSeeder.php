<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            \Mergeloop\Autoload\Database\Seeders\RoleAndPermissionSeeder::class,
            UserSeeder::class,
            PageSeeder::class,
            MenuSeeder::class,
            NotificationBarSeeder::class,
        ]);
    }
}
