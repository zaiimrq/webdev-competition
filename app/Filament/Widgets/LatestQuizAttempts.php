<?php

namespace App\Filament\Widgets;

use App\Models\UserAnswer;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestQuizAttempts extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                UserAnswer::with(['user', 'quiz'])
                    ->latest()
                    ->limit(5)
            )
            ->columns([
                TextColumn::make('user.name')
                    ->label('Nama Pengguna')
                    ->searchable(),
                TextColumn::make('quiz.name')
                    ->label('Quiz')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Waktu Pengerjaan')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->heading('Quiz Terbaru')
            ->defaultSort('created_at', 'desc');
    }
}
