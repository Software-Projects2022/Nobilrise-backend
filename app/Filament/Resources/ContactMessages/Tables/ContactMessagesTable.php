<?php

namespace App\Filament\Resources\ContactMessages\Tables;

use App\Models\ContactMessage;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ContactMessagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('first_name')
                    ->label('الاسم الأول')
                    ->searchable(),

                TextColumn::make('last_name')
                    ->label('الاسم الأخير')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('البريد')
                    ->searchable()
                    ->copyable()
                    ->icon('heroicon-m-envelope'),

                TextColumn::make('phone')
                    ->label('الهاتف')
                    ->searchable()
                    ->copyable(),

                TextColumn::make('topic')
                    ->label('الموضوع')
                    ->badge()
                    ->color('primary'),

                TextColumn::make('rating')
                    ->label('التقييم')
                    ->formatStateUsing(fn ($state) => $state
                        ? str_repeat('★', $state).str_repeat('☆', 5 - $state)
                        : '—'
                    )
                    ->color('warning'),

                SelectColumn::make('status')
                    ->label('الحالة')
                    ->options(ContactMessage::statuses()),

                TextColumn::make('created_at')
                    ->label('التاريخ')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('الحالة')
                    ->options(ContactMessage::statuses()),
            ])
            ->recordActions([
                ViewAction::make()->label('عرض'),
                EditAction::make()->label('تعديل'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()->label('حذف المحدد'),
                ]),
            ]);
    }
}
