<?php

namespace App\Filament\Resources\CourseReviews\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CourseReviewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('trainingCourse.name')->label('الدورة')->searchable(),
                TextColumn::make('reviewer_name')->label('المراجع')->searchable(),
                TextColumn::make('rating')->label('التقييم'),
                TextColumn::make('review')->label('المراجعة')->limit(50),
                TextColumn::make('review_date')->label('التاريخ'),
                TextColumn::make('created_at')->label('أضيف في')->dateTime()->sortable(),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
