<?php

namespace App\Filament\Resources\PsychologicalSessionCategories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
class PsychologicalSessionCategoryForm
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
                FileUpload::make('image')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('psychological-session-categories')
                    ->maxSize(1024),
            ]);
    }
}
