<?php

namespace App\Filament\Resources\QuestionResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class AnswersRelationManager extends RelationManager
{
    protected static string $relationship = 'answers';

    protected static ?string $title = 'Jawaban';

    protected static ?string $modelLabel = 'Jawaban';

    protected static ?string $pluralModelLabel = 'Jawaban';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Jawaban')
                    ->description('Masukkan detail jawaban untuk pertanyaan ini')
                    ->icon('heroicon-m-check-circle')
                    ->collapsible()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Jawaban')
                            ->required()
                            ->placeholder('Masukkan jawaban')
                            ->columnSpanFull()
                            ->prefixIcon('heroicon-m-document-text'),
                        Forms\Components\Toggle::make('is_correct')
                            ->label('Jawaban Benar')
                            ->required()
                            ->inline(false)
                            ->onIcon('heroicon-m-check-circle')
                            ->offIcon('heroicon-m-x-circle'),
                    ]),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Jawaban')
                    ->searchable()
                    ->wrap()
                    ->icon('heroicon-m-document-text')
                    ->iconColor('primary')
                    ->weight('medium'),
                Tables\Columns\IconColumn::make('is_correct')
                    ->label('Status')
                    ->boolean()
                    ->trueIcon('heroicon-m-check-circle')
                    ->falseIcon('heroicon-m-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),
            ])
            ->defaultSort('created_at', 'desc')
            ->striped()
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Tambah Jawaban')
                    ->icon('heroicon-m-plus')
                    ->color('primary')
                    ->modalHeading('Tambah Jawaban Baru')
                    ->modalDescription('Masukkan detail jawaban untuk pertanyaan ini.'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Edit')
                    ->icon('heroicon-m-pencil-square')
                    ->color('warning')
                    ->modalHeading('Edit Jawaban')
                    ->modalDescription('Perbarui detail jawaban.'),
                Tables\Actions\DeleteAction::make()
                    ->label('Hapus')
                    ->icon('heroicon-m-trash')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus Jawaban')
                    ->modalDescription('Apakah Anda yakin ingin menghapus jawaban ini? Tindakan ini tidak dapat dibatalkan.')
                    ->modalSubmitActionLabel('Ya, Hapus')
                    ->modalCancelActionLabel('Batal'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Hapus Terpilih')
                        ->icon('heroicon-m-trash')
                        ->color('danger'),
                ])->icon('heroicon-m-chevron-down'),
            ])
            ->emptyStateIcon('heroicon-o-check-circle')
            ->emptyStateHeading('Belum ada jawaban')
            ->emptyStateDescription('Mulai dengan menambahkan jawaban baru menggunakan tombol di atas.');
    }
}
