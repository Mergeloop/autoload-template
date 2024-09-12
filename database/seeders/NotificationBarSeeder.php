<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Mergeloop\Autoload\Models\NotificationBar;

class NotificationBarSeeder extends Seeder
{
    public function run(): void
    {
        NotificationBar::create([
            'name' => 'Notification Banner Callout',
            'placement' => 'below_header',
            'is_active' => true,
            'content' => '<p class="text-center w-full">Thank you for using our Autoload template! Read along to <a href="https://autoload.dev/docs" class="underline underline-offset-2">the docs here</a>.</p>',
        ]);
    }
}
