<?php

namespace App\Filament\Widgets;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\User;
use App\Models\UserAnswer;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Quiz', Quiz::count())
                ->description('Total quiz yang tersedia')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('success'),

            Stat::make('Total Pertanyaan', Question::count())
                ->description('Jumlah pertanyaan dari semua quiz')
                ->descriptionIcon('heroicon-m-question-mark-circle')
                ->color('info'),

            Stat::make('Total Pengguna', User::count())
                ->description('Jumlah pengguna terdaftar')
                ->descriptionIcon('heroicon-m-users')
                ->color('warning'),

            Stat::make('Quiz Selesai', UserAnswer::distinct('quiz_id')->count())
                ->description('Quiz yang telah diselesaikan')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('success'),
        ];
    }
}
