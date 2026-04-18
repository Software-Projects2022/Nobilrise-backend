<?php

namespace App\Filament\Resources\PsychologicalSessions\Schemas;

use App\Models\PsychologicalSessionCategory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PsychologicalSessionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('English Name')->required(),
                TextInput::make('name_ar')->label('Arabic Name')->required(),
                Textarea::make('short_description')->label('English Short Description')->required(),
                Textarea::make('short_description_ar')->label('Arabic Short Description')->required(),
                RichEditor::make('description')->label('English Description')->required(),
                RichEditor::make('description_ar')->label('Arabic Description')->required(),
                Select::make('psychological_session_category_id')
                    ->label('Category')
                    ->required()
                    ->options(PsychologicalSessionCategory::all()->pluck('name', 'id')),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('psychological-sessions'),
                TextInput::make('price')->numeric()->default(0),
                TextInput::make('discount_price')->numeric()->default(0),
                TextInput::make('duration')->numeric()->label('Duration (minutes)'),
                TextInput::make('people_count')->numeric()->label('People Count'),
            ]);
    }
}
