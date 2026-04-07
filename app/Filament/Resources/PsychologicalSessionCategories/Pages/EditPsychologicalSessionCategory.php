<?php

namespace App\Filament\Resources\PsychologicalSessionCategories\Pages;

use App\Filament\Resources\PsychologicalSessionCategories\PsychologicalSessionCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPsychologicalSessionCategory extends EditRecord
{
    protected static string $resource = PsychologicalSessionCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
