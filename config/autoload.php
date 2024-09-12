<?php

return [
    'sitemap_pages' => [
        //
    ],

    'cache_ignored_routes' => [
        //
    ],

    'cache_ignored_responses' => [
        'livewire*',
    ],

    'primary_cms_color' => \Filament\Support\Colors\Color::Blue,

    'filament_spa' => env('KEYSTONE_FILAMENT_SPA', false),

    'notification_bar_placements' => [
        'above_header',
        'below_header',
    ],
];
