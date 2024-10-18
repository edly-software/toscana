<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerNotificationResource\Pages;
use App\Models\CustomerNotification;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CustomerNotificationResource extends Resource
{
    protected static ?string $model = CustomerNotification::class;

    protected static ?string $navigationGroup = 'Web';

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                RichEditor::make('information')
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListCustomerNotifications::route('/'),
            'create' => Pages\CreateCustomerNotification::route('/create'),
            'edit' => Pages\EditCustomerNotification::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Customer Notifications');
    }
    public static function getPluralLabel(): string
    {
        return __('Customer Notifications');
    }

    public static function getBreadcrumb(): string
    {
        return __('Customer Notification');
    }

    public static function getLabel(): ?string
    {
        return __('Customer Notification');
    }
}
