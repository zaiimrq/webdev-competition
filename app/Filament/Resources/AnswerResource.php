<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnswerResource\Pages;
use App\Models\Answer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AnswerResource extends Resource
{
    protected static ?string $model = Answer::class;

    protected static ?string $navigationIcon = 'heroicon-o-check-circle';

    protected static ?string $navigationLabel = 'Jawaban';

    protected static ?string $modelLabel = 'Jawaban';

    protected static ?string $pluralModelLabel = 'Jawaban';

    protected static ?string $navigationGroup = 'Manajemen Quiz';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Jawaban')
                    ->schema([
                        Forms\Components\Select::make('question_id')
                            ->label('Pertanyaan')
                            ->native(false)
                            ->relationship('question', 'name')
                            ->required(),
                        Forms\Components\TextInput::make('name')
                            ->label('Jawaban')
                            ->required(),
                        Forms\Components\Toggle::make('is_correct')
                            ->label('Jawaban Benar')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('question.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_correct')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListAnswers::route('/'),
            'create' => Pages\CreateAnswer::route('/create'),
            'edit' => Pages\EditAnswer::route('/{record}/edit'),
        ];
    }
}
