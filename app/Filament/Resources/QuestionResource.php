<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionResource\Pages;
use App\Filament\Resources\QuestionResource\RelationManagers\AnswersRelationManager;
use App\Models\Question;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class QuestionResource extends Resource
{
    protected static ?string $model = Question::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    protected static ?string $navigationLabel = 'Pertanyaan';

    protected static ?string $modelLabel = 'Pertanyaan';

    protected static ?string $pluralModelLabel = 'Pertanyaan';

    protected static ?string $navigationGroup = 'Manajemen Quiz';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Pertanyaan')
                    ->description('Masukkan detail pertanyaan quiz')
                    ->icon('heroicon-m-question-mark-circle')
                    ->collapsible()
                    ->schema([
                        Forms\Components\Select::make('quiz_id')
                            ->label('Quiz')
                            ->native(false)
                            ->relationship('quiz', 'name')
                            ->required()
                            ->searchable()
                            ->placeholder('Pilih quiz')
                            ->prefixIcon('heroicon-m-academic-cap'),
                        Forms\Components\TextInput::make('name')
                            ->label('Pertanyaan')
                            ->required()
                            ->placeholder('Masukkan pertanyaan')
                            ->columnSpanFull()
                            ->prefixIcon('heroicon-m-question-mark-circle'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('quiz.name')
                    ->label('Quiz')
                    ->sortable()
                    ->searchable()
                    ->icon('heroicon-m-academic-cap')
                    ->iconColor('primary'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Pertanyaan')
                    ->searchable()
                    ->wrap()
                    ->icon('heroicon-m-question-mark-circle')
                    ->iconColor('success')
                    ->weight('medium'),
                Tables\Columns\TextColumn::make('answers_count')
                    ->label('Jumlah Jawaban')
                    ->counts('answers')
                    ->icon('heroicon-m-check-circle')
                    ->color('info'),
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
            ->emptyStateIcon('heroicon-o-question-mark-circle')
            ->emptyStateHeading('Belum ada pertanyaan')
            ->emptyStateDescription('Mulai dengan menambahkan pertanyaan baru menggunakan tombol di atas.');
    }

    public static function getRelations(): array
    {
        return [
            AnswersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestion::route('/create'),
            'edit' => Pages\EditQuestion::route('/{record}/edit'),
        ];
    }
}
