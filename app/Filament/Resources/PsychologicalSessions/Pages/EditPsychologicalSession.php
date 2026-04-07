<?php

namespace App\Filament\Resources\PsychologicalSessions\Pages;

use App\Filament\Resources\PsychologicalSessions\PsychologicalSessionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPsychologicalSession extends EditRecord
{
    protected static string $resource = PsychologicalSessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
