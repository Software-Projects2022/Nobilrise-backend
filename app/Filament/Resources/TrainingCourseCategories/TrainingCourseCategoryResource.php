<?php

namespace App\Filament\Resources\TrainingCourseCategories;

use App\Filament\Resources\TrainingCourseCategories\Pages\CreateTrainingCourseCategory;
use App\Filament\Resources\TrainingCourseCategories\Pages\EditTrainingCourseCategory;
use App\Filament\Resources\TrainingCourseCategories\Pages\ListTrainingCourseCategories;
use App\Filament\Resources\TrainingCourseCategories\Schemas\TrainingCourseCategoryForm;
use App\Filament\Resources\TrainingCourseCategories\Tables\TrainingCourseCategoriesTable;
use App\Models\TrainingCourseCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TrainingCourseCategoryResource extends Resource
{
    protected static ?string $model = TrainingCourseCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TrainingCourseCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TrainingCourseCategoriesTable::configure($table);
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
            'index' => ListTrainingCourseCategories::route('/'),
            'create' => CreateTrainingCourseCategory::route('/create'),
            'edit' => EditTrainingCourseCategory::route('/{record}/edit'),
        ];
    }
}
