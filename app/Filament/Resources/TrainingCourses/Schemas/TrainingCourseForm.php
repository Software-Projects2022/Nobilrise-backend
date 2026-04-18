<?php

namespace App\Filament\Resources\TrainingCourses\Schemas;

use App\Models\TrainingCourseCategory;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
class TrainingCourseForm
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
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('discount_price')
                    ->required()
                    ->numeric()
                    ->default(0),
                FileUpload::make('image')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('training-courses')
                    ->maxSize(1024),
                TextInput::make('instructor_name')->label('Instructor Name')->nullable(),
                TextInput::make('instructor_title')->label('Instructor Title')->nullable(),
                FileUpload::make('instructor_image')
                    ->label('Instructor Image')
                    ->image()
                    ->disk('public')
                    ->directory('instructors')
                    ->nullable(),
                Textarea::make('instructor_bio')->label('Instructor Bio')->nullable(),
                TextInput::make('rating')->label('Rating')->numeric()->nullable(),
                TextInput::make('reviews_count')->label('Reviews Count')->numeric()->nullable(),
                TextInput::make('students_count')->label('Students Count')->numeric()->nullable(),
                TextInput::make('duration_hours')->label('Duration (hours)')->numeric()->nullable(),
                Select::make('training_course_category_id')
                    ->required()
                    ->options(TrainingCourseCategory::all()->pluck('name', 'id')),
            ]);
    }
}
