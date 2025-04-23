<?php

namespace App\Filament\Widgets;

use App\Models\UserAnswer;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class QuizCompletionsChart extends ChartWidget
{
    protected static ?string $heading = 'Quiz Completions';

    protected int|string|array $columnSpan = 'full';

    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $data = UserAnswer::query()
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
            ->where('created_at', '>=', now()->subDays(30))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Quiz selesai',
                    'data' => $data->pluck('count')->toArray(),
                    'backgroundColor' => 'rgba(34, 197, 94, 0.5)',
                    'borderColor' => 'rgb(34, 197, 94)',
                ],
            ],
            'labels' => $data->pluck('date')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
