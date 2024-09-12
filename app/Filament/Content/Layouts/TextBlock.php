<?php

namespace App\Filament\Content\Layouts;

use Filament\Forms;
use Mergeloop\Autoload\Filament\Content\Fields;
use Mergeloop\Autoload\Filament\Content\AutoloadLayout;

class TextBlock extends AutoloadLayout
{
    protected function layoutFields(): array
    {
        return [
            Fields\TextField::make('text')
                ->label('WYSIWYG Text')
                ->rules(['required']),
        ];
    }
}
