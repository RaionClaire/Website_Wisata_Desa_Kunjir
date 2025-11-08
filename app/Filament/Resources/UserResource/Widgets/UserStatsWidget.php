<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total User Terdaftar', User::count())
                ->description('Semua user yang terdaftar')
                ->descriptionIcon('heroicon-m-users')
                ->color('success'),

            Stat::make('User Baru Bulan Ini', User::whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)
                ->count())
                ->description('User yang mendaftar bulan ini')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('primary'),

            Stat::make('Total Artikel', \App\Models\Article::count())
                ->description('Semua artikel yang telah dibuat')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('warning'),
        ];
    }
}
