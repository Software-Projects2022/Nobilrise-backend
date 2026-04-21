<?php

namespace App\Filament\Resources\Enrollments\Schemas;

use App\Models\Enrollment;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class EnrollmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('status')
                ->label('الحالة')
                ->options(Enrollment::statuses())
                ->required(),
        ]);
    }
}
