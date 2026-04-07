<?php

namespace App\Filament\Resources\PsychologicalSessions;

use App\Filament\Resources\PsychologicalSessions\Pages\CreatePsychologicalSession;
use App\Filament\Resources\PsychologicalSessions\Pages\EditPsychologicalSession;
use App\Filament\Resources\PsychologicalSessions\Pages\ListPsychologicalSessions;
use App\Filament\Resources\PsychologicalSessions\Schemas\PsychologicalSessionForm;
use App\Filament\Resources\PsychologicalSessions\Tables\PsychologicalSessionsTable;
use App\Models\PsychologicalSession;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PsychologicalSessionResource extends Resource
{
    protected static ?string $model = PsychologicalSession::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PsychologicalSessionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PsychologicalSessionsTable::configure($table);
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
            'index' => ListPsychologicalSessions::route('/'),
            'create' => CreatePsychologicalSession::route('/create'),
            'edit' => EditPsychologicalSession::route('/{record}/edit'),
        ];
    }
}
