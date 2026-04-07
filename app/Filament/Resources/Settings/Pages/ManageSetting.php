<?php

namespace App\Filament\Resources\Settings\Pages;

use App\Filament\Resources\Settings\SettingResource;
use App\Models\Setting;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class ManageSetting extends EditRecord
{
    protected static string $resource = SettingResource::class;

    public function mount(int | string $record = ''): void
    {
        $this->record = Setting::query()->first() ?? new Setting;

        $this->authorizeAccess();

        $this->fillForm();

        $this->previousUrl = url()->previous();
    }

    protected function authorizeAccess(): void
    {
        $record = $this->getRecord();

        if ($record->exists) {
            abort_unless(static::getResource()::canEdit($record), 403);
        } else {
            abort_unless(static::getResource()::canCreate(), 403);
        }
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        if (! $record->exists) {
            $record->fill($data);
            $record->save();

            return $record;
        }

        return parent::handleRecordUpdate($record, $data);
    }

    protected function getHeaderActions(): array
    {
        return [];
    }
}
