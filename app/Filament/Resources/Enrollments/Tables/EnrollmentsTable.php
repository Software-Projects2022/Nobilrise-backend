<?php

namespace App\Filament\Resources\Enrollments\Tables;

use App\Models\Enrollment;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\SelectColumn;
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

                SelectColumn::make('status')
                    ->label('الحالة')
                    ->options(Enrollment::statuses()),

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
                EditAction::make()->label('تعديل'),
            ]);
    }
}
