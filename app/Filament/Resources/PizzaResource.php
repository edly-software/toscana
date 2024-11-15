<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PizzaResource\Pages;
use App\Filament\Resources\PizzaResource\RelationManagers;
use App\Models\Pizza;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PizzaResource extends Resource
{
    protected static ?string $model = Pizza::class;

    protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make("name")->required(),
            TextInput::make("price")
                ->label("Preis")
                ->numeric()
                ->suffixIcon("heroicon-o-currency-euro")
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('price')->suffix(' €'),
            ])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make()])
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
            "index" => Pages\ListPizzas::route("/"),
            "create" => Pages\CreatePizza::route("/create"),
            "edit" => Pages\EditPizza::route("/{record}/edit"),
        ];
    }
}
