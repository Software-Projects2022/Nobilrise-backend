<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('home_banner_title')
                    ->label('Home Banner Title')
                    ->required(),
                TextInput::make('home_banner_title_ar')
                    ->label('Home Banner Title (Arabic)')
                    ->required(),
                Textarea::make('home_banner_description')
                    ->label('Home Banner Description')
                    ->required(),
                Textarea::make('home_banner_description_ar')
                    ->label('Home Banner Description (Arabic)')
                    ->required(),
                FileUpload::make('home_banner_image1')
                    ->label('Home Banner Image 1')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('settings'),
                FileUpload::make('home_banner_image2')
                    ->label('Home Banner Image 2')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('settings'),
                TextInput::make('home_banner_link')
                    ->label('Home Banner Link')
                    ->required(),
                Textarea::make('footer_description')
                    ->label('Footer Description')
                    ->required(),
                Textarea::make('footer_description_ar')
                    ->label('Footer Description (Arabic)')
                    ->required(),
                TextInput::make('phone')
                    ->label('Phone')
                    ->required(),
                TextInput::make('email')
                    ->label('Email')
                    ->required(),
                TextInput::make('address')
                    ->label('Address')
                    ->required(),
                TextInput::make('address_ar')
                    ->label('Address (Arabic)')
                    ->required(),
                TextInput::make('facebook')
                    ->label('Facebook')
                    ->required(),
                TextInput::make('twitter')
                    ->label('Twitter')
                    ->required(),
                TextInput::make('instagram')
                    ->label('Instagram')
                    ->required(),
                TextInput::make('linkedin')
                    ->label('LinkedIn')
                    ->required(),
                TextInput::make('youtube')
                    ->label('YouTube')
                    ->required(),
                TextInput::make('app_store_link')
                    ->label('App Store Link')
                    ->nullable(),
                TextInput::make('google_play_link')
                    ->label('Google Play Link')
                    ->nullable(),
                TextInput::make('app_rating')
                    ->label('App Rating')
                    ->nullable(),
                TextInput::make('app_downloads')
                    ->label('App Downloads')
                    ->nullable(),
                FileUpload::make('app_phone_frame')
                    ->label('App Phone Frame Image')
                    ->image()
                    ->disk('public')
                    ->directory('settings')
                    ->nullable(),
                FileUpload::make('app_screenshot_1')
                    ->label('App Screenshot 1')
                    ->image()
                    ->disk('public')
                    ->directory('settings')
                    ->nullable(),
                FileUpload::make('app_screenshot_2')
                    ->label('App Screenshot 2')
                    ->image()
                    ->disk('public')
                    ->directory('settings')
                    ->nullable(),
                FileUpload::make('app_screenshot_3')
                    ->label('App Screenshot 3')
                    ->image()
                    ->disk('public')
                    ->directory('settings')
                    ->nullable(),
            ]);
    }
}
