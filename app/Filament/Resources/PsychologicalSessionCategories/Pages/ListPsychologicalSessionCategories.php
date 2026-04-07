<?php

namespace App\Filament\Resources\PsychologicalSessionCategories\Pages;

use App\Filament\Resources\PsychologicalSessionCategories\PsychologicalSessionCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPsychologicalSessionCategories extends ListRecords
{
    protected static string $resource = PsychologicalSessionCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
