<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Category;
use App\Models\Product;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $navigationGroup = 'Web';

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->translateLabel()
                    ->required(),
                TextInput::make('description')
                    ->label('Beschreibung')
                    ->required(),
                TextInput::make('price')
                    ->label('Preis')
                    ->numeric()
                    ->suffixIcon('heroicon-o-currency-euro')
                    ->required(),
                Select::make('category_id')
                    ->options(Category::all()->pluck('name', 'id'))
                    ->label('Kategorie')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('description')
                    ->label('Beschreibung'),
                TextColumn::make('price')
                    ->label('Preis')
                    ->suffix(' €'),
                TextColumn::make('category.name')
                    ->label('Kategorie'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Products');
    }
    public static function getPluralLabel(): string
    {
        return __('Products');
    }
    public static function getBreadcrumb(): string
    {
        return __('Product');
    }

    public static function getLabel(): ?string
    {
        return __('Product');
    }
}
