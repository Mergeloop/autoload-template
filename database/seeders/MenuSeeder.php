<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Mergeloop\Autoload\Models\Menu;
use Mergeloop\Autoload\Models\MenuItem;
use Mergeloop\Autoload\Models\Page;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $menu = Menu::create([
            'title' => 'Main Navigation',
            'is_active' => true,
        ]);

         MenuItem::create([
            'menu_id'   => $menu->id,
            'position'  => 1,
            'custom_link' => '/',
            'alternative_label' => 'Home',
        ]);

        MenuItem::create([
            'menu_id'   => $menu->id,
            'position'  => 2,
            'parent_type' => MenuItem::class,
            'item_type' => Page::class,
            'item_id'   => Page::where('slug', 'demo')->first()?->id,
        ]);

        Menu::create([
            'title' => 'Footer Navigation',
            'is_active' => true,
        ]);
    }
}
