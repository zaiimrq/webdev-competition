<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationTitle = 'Dashboard';

    protected static ?int $navigationSort = -2;

    public function getColumns(): int|array
    {
        return 2;
    }

    protected function getHeaderWidgets(): array
    {
        return [
            \App\Filament\Widgets\StatsOverview::class,
        ];
    }

    public function getWidgets(): array
    {
        return [
            \App\Filament\Widgets\LatestQuizAttempts::class,
            \App\Filament\Widgets\QuizCompletionsChart::class,
        ];
    }
}
