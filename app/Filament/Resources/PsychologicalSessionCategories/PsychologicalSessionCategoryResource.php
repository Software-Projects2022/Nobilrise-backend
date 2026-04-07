<?php

namespace App\Filament\Resources\PsychologicalSessionCategories;

use App\Filament\Resources\PsychologicalSessionCategories\Pages\CreatePsychologicalSessionCategory;
use App\Filament\Resources\PsychologicalSessionCategories\Pages\EditPsychologicalSessionCategory;
use App\Filament\Resources\PsychologicalSessionCategories\Pages\ListPsychologicalSessionCategories;
use App\Filament\Resources\PsychologicalSessionCategories\Schemas\PsychologicalSessionCategoryForm;
use App\Filament\Resources\PsychologicalSessionCategories\Tables\PsychologicalSessionCategoriesTable;
use App\Models\PsychologicalSessionCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PsychologicalSessionCategoryResource extends Resource
{
    protected static ?string $model = PsychologicalSessionCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PsychologicalSessionCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PsychologicalSessionCategoriesTable::configure($table);
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
            'index' => ListPsychologicalSessionCategories::route('/'),
            'create' => CreatePsychologicalSessionCategory::route('/create'),
            'edit' => EditPsychologicalSessionCategory::route('/{record}/edit'),
        ];
    }
}
