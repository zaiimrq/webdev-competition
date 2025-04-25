<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FoodResource\Pages;
use App\Models\Food;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FoodResource extends Resource
{
    protected static ?string $model = Food::class;

    protected static ?string $navigationIcon = 'heroicon-o-cake';

    protected static ?string $navigationLabel = 'Makanan';

    protected static ?string $modelLabel = 'Makanan';

    protected static ?string $pluralModelLabel = 'Makanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Makanan')
                    ->description('Masukkan detail informasi makanan')
                    ->icon('heroicon-m-cake')
                    ->collapsible()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Makanan')
                            ->required()
                            ->placeholder('Masukkan nama makanan')
                            ->maxLength(255),
                        Forms\Components\Select::make('category')
                            ->label('Kategori')
                            ->native(false)
                            ->options(\App\Enums\Foods\Category::class)
                            ->required()
                            ->placeholder('Pilih kategori makanan')
                            ->prefixIcon('heroicon-m-squares-2x2'),
                    ])->columns(2),

                Forms\Components\Section::make('Nutrisi')
                    ->description('Masukkan informasi nutrisi makanan')
                    ->icon('heroicon-m-beaker')
                    ->collapsible()
                    ->schema([
                        Forms\Components\TextInput::make('protein')
                            ->label('Protein (g)')
                            ->required()
                            ->numeric()
                            ->placeholder('Jumlah protein dalam gram')
                            ->suffixIcon('heroicon-m-beaker')
                            ->minValue(0)
                            ->maxValue(1000),
                        Forms\Components\TextInput::make('carbohydrate')
                            ->label('Karbohidrat (g)')
                            ->required()
                            ->numeric()
                            ->placeholder('Jumlah karbohidrat dalam gram')
                            ->suffixIcon('heroicon-m-chart-bar')
                            ->minValue(0)
                            ->maxValue(1000),
                        Forms\Components\TextInput::make('fat')
                            ->label('Lemak (g)')
                            ->required()
                            ->numeric()
                            ->placeholder('Jumlah lemak dalam gram')
                            ->suffixIcon('heroicon-m-circle-stack')
                            ->minValue(0)
                            ->maxValue(1000),
                        Forms\Components\TextInput::make('calories')
                            ->label('Kalori (kcal)')
                            ->required()
                            ->numeric()
                            ->placeholder('Jumlah kalori dalam kcal')
                            ->suffixIcon('heroicon-m-fire')
                            ->minValue(0)
                            ->maxValue(5000),
                    ])->columns(2),

                Forms\Components\Section::make('Gambar')
                    ->description('Masukkan URL gambar makanan')
                    ->icon('heroicon-m-photo')
                    ->collapsible()
                    ->schema([
                        Forms\Components\TextInput::make('image_url')
                            ->label('URL Gambar')
                            ->required()
                            ->placeholder('Masukkan URL gambar makanan')
                            ->prefixIcon('heroicon-m-photo')
                            ->url()
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Makanan')
                    ->searchable()
                    ->sortable()
                    ->icon('heroicon-m-cake')
                    ->iconColor('success')
                    ->weight('medium'),
                Tables\Columns\TextColumn::make('protein')
                    ->label('Protein (g)')
                    ->numeric()
                    ->sortable()
                    ->icon('heroicon-m-beaker')
                    ->color('info'),
                Tables\Columns\TextColumn::make('carbohydrate')
                    ->label('Karbohidrat (g)')
                    ->numeric()
                    ->sortable()
                    ->icon('heroicon-m-chart-bar')
                    ->color('warning'),
                Tables\Columns\TextColumn::make('fat')
                    ->label('Lemak (g)')
                    ->numeric()
                    ->sortable()
                    ->icon('heroicon-m-circle-stack')
                    ->color('danger'),
                Tables\Columns\TextColumn::make('calories')
                    ->label('Kalori (kcal)')
                    ->numeric()
                    ->sortable()
                    ->icon('heroicon-m-fire')
                    ->color('danger')
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->searchable()
                    ->badge(),
                Tables\Columns\ImageColumn::make('image_url')
                    ->label('Gambar')
                    ->circular()
                    ->size(40),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat pada')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui pada')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->striped()
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Edit')
                    ->icon('heroicon-m-pencil-square')
                    ->color('warning'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Hapus')
                        ->icon('heroicon-m-trash')
                        ->color('danger'),
                ])->icon('heroicon-m-chevron-down'),
            ])
            ->emptyStateIcon('heroicon-o-cake')
            ->emptyStateHeading('Belum ada data makanan')
            ->emptyStateDescription('Mulai dengan menambahkan makanan baru menggunakan tombol di atas.');
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
            'index' => Pages\ListFood::route('/'),
            'create' => Pages\CreateFood::route('/create'),
            'edit' => Pages\EditFood::route('/{record}/edit'),
        ];
    }
}
