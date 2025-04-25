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
                    ->description('Masukkan detail jawaban untuk pertanyaan')
                    ->icon('heroicon-m-check-circle')
                    ->collapsible()
                    ->schema([
                        Forms\Components\Select::make('question_id')
                            ->label('Pertanyaan')
                            ->native(false)
                            ->relationship('question', 'name')
                            ->required()
                            ->searchable()
                            ->placeholder('Pilih pertanyaan')
                            ->prefixIcon('heroicon-m-question-mark-circle'),
                        Forms\Components\TextInput::make('name')
                            ->label('Jawaban')
                            ->required()
                            ->placeholder('Masukkan jawaban')
                            ->prefixIcon('heroicon-m-document-text'),
                        Forms\Components\Toggle::make('is_correct')
                            ->label('Jawaban Benar')
                            ->required()
                            ->inline(false)
                            ->onIcon('heroicon-m-check-circle')
                            ->offIcon('heroicon-m-x-circle'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('question.name')
                    ->label('Pertanyaan')
                    ->sortable()
                    ->searchable()
                    ->wrap()
                    ->icon('heroicon-m-question-mark-circle')
                    ->iconColor('primary'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Jawaban')
                    ->searchable()
                    ->icon('heroicon-m-document-text')
                    ->iconColor('success')
                    ->weight('medium'),
                Tables\Columns\IconColumn::make('is_correct')
                    ->label('Status')
                    ->boolean()
                    ->trueIcon('heroicon-m-check-circle')
                    ->falseIcon('heroicon-m-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),
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
            ->emptyStateIcon('heroicon-o-check-circle')
            ->emptyStateHeading('Belum ada jawaban')
            ->emptyStateDescription('Mulai dengan menambahkan jawaban baru menggunakan tombol di atas.');
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
