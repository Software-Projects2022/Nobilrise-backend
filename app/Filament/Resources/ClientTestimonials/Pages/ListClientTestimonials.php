<?php

namespace App\Filament\Resources\ClientTestimonials\Pages;

use App\Filament\Resources\ClientTestimonials\ClientTestimonialResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListClientTestimonials extends ListRecords
{
    protected static string $resource = ClientTestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
