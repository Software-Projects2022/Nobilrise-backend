<?php

namespace App\Filament\Resources\ClientTestimonials;

use App\Filament\Resources\ClientTestimonials\Pages\CreateClientTestimonial;
use App\Filament\Resources\ClientTestimonials\Pages\EditClientTestimonial;
use App\Filament\Resources\ClientTestimonials\Pages\ListClientTestimonials;
use App\Filament\Resources\ClientTestimonials\Schemas\ClientTestimonialForm;
use App\Filament\Resources\ClientTestimonials\Tables\ClientTestimonialsTable;
use App\Models\ClientTestimonial;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ClientTestimonialResource extends Resource
{
    protected static ?string $model = ClientTestimonial::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ClientTestimonialForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClientTestimonialsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListClientTestimonials::route('/'),
            'create' => CreateClientTestimonial::route('/create'),
            'edit' => EditClientTestimonial::route('/{record}/edit'),
        ];
    }
}
