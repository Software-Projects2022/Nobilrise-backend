<?php

namespace App\Filament\Resources\TrainingCourseCategories\Pages;

use App\Filament\Resources\TrainingCourseCategories\TrainingCourseCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTrainingCourseCategories extends ListRecords
{
    protected static string $resource = TrainingCourseCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
