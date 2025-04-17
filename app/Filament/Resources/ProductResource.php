<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static ?string $navigationLabel = 'Продукты';
    protected static ?string $navigationGroup = 'Товары';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Общее')
                            ->schema([
                                Forms\Components\Grid::make()->schema([
                                    Forms\Components\TextInput::make('name')
                                        ->label('Название')
                                        ->required()
                                        ->columnSpan(3)
                                        ->maxLength(255),
                                    Forms\Components\Select::make('product_type_id')
                                        ->relationship('product_type', 'name')
                                        ->label('Тип продукта')
                                        ->columnSpan(1)
                                        ->required(),
                                ])->columns(4),
                                Forms\Components\Grid::make()->schema([
                                    Forms\Components\TextInput::make('packaging')
                                        ->label('Тип упаковки')
                                        ->required()
                                        ->maxLength(255),
                                    Forms\Components\TextInput::make('weight')
                                        ->label('Вес')
                                        ->required()
                                        ->maxLength(255),
                                    Forms\Components\TextInput::make('gost')
                                        ->label('ГОСТ')
                                        ->required()
                                        ->maxLength(255),
                                ])->columns(3),
                                Forms\Components\Grid::make()->schema([
                                    Forms\Components\Textarea::make('compound')
                                        ->label('Состав')
                                        ->required(),
                                    Forms\Components\Textarea::make('description')
                                        ->label('Описание')
                                        ->required(),
                                    Forms\Components\Textarea::make('worth')
                                        ->label('Пищевая ценность')
                                        ->required(),
                                ])->columns(3),
                                Forms\Components\Grid::make()->schema([
                                    Forms\Components\TextInput::make('date_manufactured')
                                        ->required()
                                        ->label('Дата производства')
                                        ->maxLength(255),
                                    Forms\Components\TextInput::make('expiration')
                                        ->label('Срок годности')
                                        ->required(),
                                ])->columns(2),
                                Forms\Components\SpatieMediaLibraryFileUpload::make('image')
                                    ->collection('image')
                                    ->reorderable()
                                    ->label('')
                                    ->imageEditor()
                                    ->imageEditorMode(2)
                                    ->label('')
                                    ->panelLayout('grid')
                                    ->imageCropAspectRatio('240:240')
                                    ->columnSpan(1),
                            ])
                    ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Название')
                    ->searchable(),
                Tables\Columns\TextColumn::make('product_type.name')
                    ->label('Тип продукта')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('packaging')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Вид упаковки')
                    ->searchable(),
                Tables\Columns\TextColumn::make('weight')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Вес')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gost')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('ГОСТ')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_manufactured')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Произведен')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Создан')
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
}
