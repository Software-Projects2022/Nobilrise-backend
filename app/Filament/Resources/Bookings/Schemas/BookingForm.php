<?php

namespace App\Filament\Resources\Bookings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('الاسم')->required(),
                TextInput::make('phone')->label('الهاتف')->required(),
                TextInput::make('email')->label('البريد')->email()->required(),
                TextInput::make('session_type')->label('نوع الجلسة'),
                TextInput::make('date')->label('التاريخ'),
                TextInput::make('time')->label('الوقت'),
                Textarea::make('notes')->label('ملاحظات'),
            ]);
    }
}
