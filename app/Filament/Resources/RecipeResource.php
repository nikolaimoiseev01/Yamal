<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecipeResource\Pages;
use App\Filament\Resources\RecipeResource\RelationManagers;
use App\Models\Recipe;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RecipeResource extends Resource
{
    protected static ?string $model = Recipe::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Рецепты';
    protected static ?string $navigationLabel = 'Рецепты';

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
                                        ->required()
                                        ->label('Название')
                                        ->columnSpan(3)
                                        ->maxLength(255),
                                    Forms\Components\Select::make('recipe_type_id')
                                        ->relationship('recipe_type', 'name')
                                        ->label('Тип рецепта')
                                        ->columnSpan(1)
                                        ->required(),
                                ])->columns(4),
                                Forms\Components\TextInput::make('creator')
                                    ->required()
                                    ->label('Создатель')
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('ingredients')
                                    ->required()
                                    ->label('Ингредиенты')
                                    ->columnSpanFull(),
                                Forms\Components\Textarea::make('cooking_method')
                                    ->required()
                                    ->label('Метод приготовления')
                                    ->columnSpanFull(),
                            ]),
                        Tabs\Tab::make('Обложка')
                            ->schema([
                                Forms\Components\SpatieMediaLibraryFileUpload::make('image')
                                    ->collection('image')
                                    ->image()
                                    ->reorderable()
                                    ->label('')
                                    ->imageEditor()
                                    ->imageEditorMode(2)
                                    ->label('')
                                    ->imageCropAspectRatio('460:280')
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
                Tables\Columns\TextColumn::make('recipe_type.name')
                    ->label('Типы рецепта')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('creator')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Создатель')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Создан')
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Обновлен')
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
            'index' => Pages\ListRecipes::route('/'),
            'create' => Pages\CreateRecipe::route('/create'),
            'edit' => Pages\EditRecipe::route('/{record}/edit'),
        ];
    }
}
