<?php

namespace App\Filament\Resources\TrainingCourseCategories\Pages;

use App\Filament\Resources\TrainingCourseCategories\TrainingCourseCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTrainingCourseCategory extends EditRecord
{
    protected static string $resource = TrainingCourseCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
