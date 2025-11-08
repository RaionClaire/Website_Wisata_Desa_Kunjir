<?php

namespace App\Filament\Resources\ArticleResource\Widgets;

use App\Models\Article;
use Filament\Widgets\ChartWidget;

class ArticleWidget extends ChartWidget
{
    protected static ?string $heading = 'Artikel dengan View Terbanyak';

    protected static ?string $maxHeight = '300px';
    protected int | string | array $columnSpan = 1; // Ubah dari 'full' ke 1

    protected function getData(): array
    {
        $topArticles = Article::orderByDesc('views')
            ->take(5)
            ->get(['title', 'views']);

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Views',
                    'data' => $topArticles->pluck('views')->toArray(),
                    'backgroundColor' => [
                        '#0EA5E9',
                        '#14B8A6',
                        '#FACC15',
                        '#6366F1',
                        '#F43F5E',
                    ],
                ],
            ],
            'labels' => $topArticles->pluck('title')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getOptions(): array
    {
        return [
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'precision' => 0,
                        'stepSize' => 1,
                    ],
                ],
            ],
            'plugins' => [
                'legend' => [
                    'display' => true,
                ],
            ],
        ];
    }
}
