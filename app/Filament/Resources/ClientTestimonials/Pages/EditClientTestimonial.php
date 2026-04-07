<?php

namespace App\Filament\Resources\ClientTestimonials\Pages;

use App\Filament\Resources\ClientTestimonials\ClientTestimonialResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditClientTestimonial extends EditRecord
{
    protected static string $resource = ClientTestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
