<?php

namespace App\Filament\Resources\Values\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ValueForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                TextInput::make('title_ar')
                    ->label('Title (Arabic)')
                    ->required(),
                Textarea::make('description')
                    ->label('Description')
                    ->required(),
                Textarea::make('description_ar')
                    ->label('Description (Arabic)')
                    ->required(),
                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->disk('public')
                    ->directory('values')
                    ->required(),
                //
            ]);
    }
}
