<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Mergeloop\Autoload\Models\Page;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        Page::factory()->create([
            'name' => 'Demo Page',
            'slug' => 'demo',
            'is_active' => true,
            'is_indexable' => false,
            'content' => [
                [
                    'key' => 'abcd1234',
                    'type' => 'text-block',
                    'data' => [
                        'text' => '<p>Hello World!</p>'
                    ]
                ]
            ]
        ]);
    }
}
