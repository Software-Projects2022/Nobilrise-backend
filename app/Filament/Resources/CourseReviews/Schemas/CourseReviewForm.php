<?php

namespace App\Filament\Resources\CourseReviews\Schemas;

use App\Models\TrainingCourse;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CourseReviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('training_course_id')
                    ->label('الدورة')
                    ->required()
                    ->options(TrainingCourse::all()->pluck('name', 'id')),
                TextInput::make('reviewer_name')->label('اسم المراجع')->required(),
                FileUpload::make('reviewer_image')
                    ->label('صورة المراجع')
                    ->image()
                    ->disk('public')
                    ->directory('reviewers'),
                TextInput::make('rating')->label('التقييم')->numeric()->minValue(1)->maxValue(5)->default(5),
                Textarea::make('review')->label('المراجعة')->required(),
                TextInput::make('review_date')->label('تاريخ المراجعة'),
            ]);
    }
}
