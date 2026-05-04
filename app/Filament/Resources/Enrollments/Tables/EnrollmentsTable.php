<?php

namespace App\Filament\Resources\Enrollments\Tables;

use App\Models\Enrollment;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class EnrollmentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('client.name')
                    ->label('العميل')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('client.email')
                    ->label('البريد')
                    ->searchable(),

                TextColumn::make('trainingCourse.name')
                    ->label('الدورة')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('amount_paid')
                    ->label('المبلغ المدفوع')
                    ->money('EGP')
                    ->sortable(),

                TextColumn::make('status')
                    ->label('الحالة')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'active' => 'success',
                        'completed' => 'info',
                        'cancelled' => 'danger',
                        default => 'warning',
                    })
                    ->formatStateUsing(fn (string $state): string => Enrollment::statuses()[$state] ?? $state),

                TextColumn::make('created_at')
                    ->label('تاريخ التسجيل')
                    ->dateTime('d/m/Y')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('الحالة')
                    ->options(Enrollment::statuses()),
            ])
            ->recordActions([
                Action::make('accept')
                    ->label('قبول')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->visible(fn (Enrollment $record): bool => $record->status !== 'active')
                    ->action(fn (Enrollment $record) => $record->update(['status' => 'active'])),

                Action::make('complete')
                    ->label('إتمام')
                    ->icon('heroicon-o-academic-cap')
                    ->color('info')
                    ->visible(fn (Enrollment $record): bool => $record->status === 'active')
                    ->action(fn (Enrollment $record) => $record->update(['status' => 'completed'])),

                Action::make('cancel')
                    ->label('إلغاء')
                    ->icon('heroicon-o-x-circle')
                    ->color('danger')
                    ->visible(fn (Enrollment $record): bool => $record->status !== 'cancelled')
                    ->action(fn (Enrollment $record) => $record->update(['status' => 'cancelled'])),

                DeleteAction::make()->label('حذف'),
            ]);
    }
}
