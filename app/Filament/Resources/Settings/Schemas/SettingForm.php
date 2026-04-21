<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            Section::make('البانر الرئيسي')
                ->columns(2)
                ->schema([
                    TextInput::make('home_banner_title')->label('العنوان (إنجليزي)')->required(),
                    TextInput::make('home_banner_title_ar')->label('العنوان (عربي)')->required(),
                    Textarea::make('home_banner_description')->label('الوصف (إنجليزي)')->required(),
                    Textarea::make('home_banner_description_ar')->label('الوصف (عربي)')->required(),
                    TextInput::make('home_banner_link')->label('رابط البانر')->columnSpanFull(),
                    FileUpload::make('home_banner_image1')->label('صورة البانر 1')->image()->disk('public')->directory('settings'),
                    FileUpload::make('home_banner_image2')->label('صورة البانر 2')->image()->disk('public')->directory('settings'),
                ]),

            Section::make('الفوتر')
                ->columns(2)
                ->schema([
                    Textarea::make('footer_description')->label('وصف الفوتر (إنجليزي)'),
                    Textarea::make('footer_description_ar')->label('وصف الفوتر (عربي)'),
                ]),

            Section::make('معلومات التواصل')
                ->columns(2)
                ->schema([
                    TextInput::make('phone')->label('رقم الهاتف'),
                    TextInput::make('email')->label('البريد الإلكتروني')->email(),
                    TextInput::make('address')->label('العنوان (إنجليزي)'),
                    TextInput::make('address_ar')->label('العنوان (عربي)'),
                    TextInput::make('whatsapp')->label('واتساب (رقم أو رابط)')->columnSpanFull(),
                ]),

            Section::make('ساعات العمل')
                ->columns(2)
                ->schema([
                    TextInput::make('work_hours_sat_wed_day')->label('اسم الفترة الأولى')->placeholder('السبت — الأربعاء'),
                    TextInput::make('work_hours_sat_wed')->label('وقت الفترة الأولى')->placeholder('9:00 ص — 9:00 م'),
                    TextInput::make('work_hours_thu_day')->label('اسم الفترة الثانية')->placeholder('الخميس'),
                    TextInput::make('work_hours_thu')->label('وقت الفترة الثانية')->placeholder('9:00 ص — 5:00 م'),
                    TextInput::make('work_hours_fri_day')->label('اسم يوم الإغلاق')->placeholder('الجمعة'),
                    Toggle::make('work_hours_fri_closed')->label('مغلق')->default(true),
                ]),

            Section::make('السوشيال ميديا')
                ->columns(2)
                ->schema([
                    TextInput::make('facebook')->label('فيسبوك'),
                    TextInput::make('twitter')->label('تويتر'),
                    TextInput::make('instagram')->label('انستغرام'),
                    TextInput::make('linkedin')->label('لينكدإن'),
                    TextInput::make('youtube')->label('يوتيوب'),
                ]),

            Section::make('الخريطة')
                ->schema([
                    Textarea::make('map_embed_url')->label('رابط تضمين الخريطة (iframe src)')->rows(3)->columnSpanFull(),
                ]),

            Section::make('تطبيق الجوال')
                ->columns(2)
                ->schema([
                    TextInput::make('app_store_link')->label('App Store'),
                    TextInput::make('google_play_link')->label('Google Play'),
                    TextInput::make('app_rating')->label('التقييم'),
                    TextInput::make('app_downloads')->label('عدد التحميلات'),
                    FileUpload::make('app_phone_frame')->label('إطار الهاتف')->image()->disk('public')->directory('settings'),
                    FileUpload::make('app_screenshot_1')->label('Screenshot 1')->image()->disk('public')->directory('settings'),
                    FileUpload::make('app_screenshot_2')->label('Screenshot 2')->image()->disk('public')->directory('settings'),
                    FileUpload::make('app_screenshot_3')->label('Screenshot 3')->image()->disk('public')->directory('settings'),
                ]),

        ]);
    }
}
