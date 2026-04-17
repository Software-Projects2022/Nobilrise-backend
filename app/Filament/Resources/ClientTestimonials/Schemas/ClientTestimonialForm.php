<?php

namespace App\Filament\Resources\ClientTestimonials\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
class ClientTestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('name')
                    ->label('Name')
                    ->required(),
                TextInput::make('name_ar')
                    ->label('Name (Arabic)')
                    ->required(),
                TextInput::make('job')
                    ->label('Job')
                    ->required(),
                TextInput::make('job_ar')
                    ->label('Job (Arabic)')
                    ->required(),
                Textarea::make('review')
                    ->label('Review')
                    ->required(),
                Textarea::make('review_ar')
                    ->label('Review (Arabic)')
                    ->required(),
                TextInput::make('rating')
                    ->label('Rating')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(5)
                    ->default(5)
                    ->required(),
                FileUpload::make('image')
                    ->label('Image')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('testimonials'),
            ]);
    }
}
