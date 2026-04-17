<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('name')
                    ->label('English Name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('name_ar')
                    ->label('Arabic Name')
                    ->required()
                    ->maxLength(255),
                Textarea::make('short_description')
                    ->label('English Short Description')
                    ->required()
                    ->maxLength(255),
                Textarea::make('short_description_ar')
                    ->label('Arabic Short Description')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('description')
                    ->label('English Description')
                    ->required()
                    ,
                RichEditor::make('description_ar')
                    ->label('Arabic Description')
                    ->required()
                    ,
                FileUpload::make('image')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('services')
                    ->maxSize(1024),
                Toggle::make('most_requested')
                    ->default(false),
            ]);
    }
}
