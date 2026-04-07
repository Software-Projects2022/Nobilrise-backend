<?php

namespace App\Filament\Resources\PsychologicalSessions\Pages;

use App\Filament\Resources\PsychologicalSessions\PsychologicalSessionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPsychologicalSessions extends ListRecords
{
    protected static string $resource = PsychologicalSessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
