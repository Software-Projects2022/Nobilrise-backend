<?php

namespace App\Filament\Resources\TrainingCourseCategories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TrainingCourseCategoryForm
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
                    ->directory('training-course-categories')
                    ->maxSize(1024),
            ]);
    }
}
