<?php

namespace App\Filament\Resources\ContactMessages\Schemas;

use App\Models\ContactMessage;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('بيانات المرسل')
                ->columns(2)
                ->schema([
                    TextInput::make('first_name')->label('الاسم الأول')->disabled(),
                    TextInput::make('last_name')->label('الاسم الأخير')->disabled(),
                    TextInput::make('email')->label('البريد الإلكتروني')->disabled(),
                    TextInput::make('phone')->label('رقم الهاتف')->disabled(),
                ]),

            Section::make('تفاصيل الرسالة')
                ->columns(2)
                ->schema([
                    TextInput::make('topic')->label('الموضوع')->disabled(),
                    TextInput::make('service')->label('الخدمة')->disabled(),
                    Textarea::make('message')->label('الرسالة')->disabled()->columnSpanFull(),
                    TextInput::make('rating')->label('التقييم')->disabled()->suffix('/ 5'),
                ]),

            Section::make('إدارة الرسالة')
                ->columns(2)
                ->schema([
                    Select::make('status')
                        ->label('الحالة')
                        ->options(ContactMessage::statuses())
                        ->required(),

                    Textarea::make('admin_notes')
                        ->label('ملاحظات الإدارة')
                        ->columnSpanFull(),
                ]),
        ]);
    }
}
