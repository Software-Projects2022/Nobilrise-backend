<?php

namespace App\Filament\Resources\Bookings\Tables;

use App\Models\Booking;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class BookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('client.name')
                    ->label('العميل')
                    ->searchable()
                    ->default('—'),

                TextColumn::make('psychologicalSession.name')
                    ->label('الجلسة')
                    ->searchable()
                    ->default('—'),

                TextColumn::make('name')->label('الاسم')->searchable(),
                TextColumn::make('phone')->label('الهاتف'),
                TextColumn::make('email')->label('البريد')->searchable(),
                TextColumn::make('session_type')->label('نوع الجلسة'),
                TextColumn::make('date')->label('التاريخ')->date(),
                TextColumn::make('time')->label('الوقت'),
                TextColumn::make('notes')->label('ملاحظات')->limit(30),

                TextColumn::make('status')
                    ->label('الحالة')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'accepted' => 'success',
                        'rejected' => 'danger',
                        default => 'warning',
                    })
                    ->formatStateUsing(fn (string $state): string => Booking::statuses()[$state] ?? $state),

                TextColumn::make('created_at')->label('تاريخ الحجز')->dateTime()->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('الحالة')
                    ->options(Booking::statuses()),
            ])
            ->recordActions([
                Action::make('accept')
                    ->label('قبول')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->visible(fn (Booking $record): bool => $record->status !== 'accepted')
                    ->action(fn (Booking $record) => $record->update(['status' => 'accepted'])),

                Action::make('reject')
                    ->label('رفض')
                    ->icon('heroicon-o-x-circle')
                    ->color('danger')
                    ->visible(fn (Booking $record): bool => $record->status !== 'rejected')
                    ->action(fn (Booking $record) => $record->update(['status' => 'rejected'])),

                DeleteAction::make()->label('حذف'),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
