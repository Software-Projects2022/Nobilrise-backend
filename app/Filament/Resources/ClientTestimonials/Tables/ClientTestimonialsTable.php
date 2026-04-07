<?php

namespace App\Filament\Resources\ClientTestimonials\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
class ClientTestimonialsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('name_ar')
                    ->label('Name (Arabic)')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('job')
                    ->label('Job')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('job_ar')
                    ->label('Job (Arabic)')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('review')
                    ->label('Review')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('review_ar')
                    ->label('Review (Arabic)')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('rating')
                    ->label('Rating')
                    ->sortable()
                    ->numeric()
                    ->formatStateUsing(function ($state) {
                        return $state . ' stars';
                    })
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
