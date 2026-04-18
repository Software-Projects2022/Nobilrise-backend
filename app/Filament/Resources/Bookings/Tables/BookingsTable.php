<?php

namespace App\Filament\Resources\Bookings\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('الاسم')->searchable(),
                TextColumn::make('phone')->label('الهاتف'),
                TextColumn::make('email')->label('البريد')->searchable(),
                TextColumn::make('session_type')->label('نوع الجلسة'),
                TextColumn::make('date')->label('التاريخ')->date(),
                TextColumn::make('time')->label('الوقت'),
                TextColumn::make('notes')->label('ملاحظات')->limit(30),
                TextColumn::make('created_at')->label('تاريخ الحجز')->dateTime()->sortable(),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
