<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\TotalUsersWidget;
use App\Filament\Widgets\MostUsedAppsWidget;
use App\Filament\Widgets\MostBlockedAppsWidget;
use App\Filament\Widgets\TotalUsersChart;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected function getHeaderWidgets(): array
    {
        return [
            TotalUsersWidget::class,
            MostUsedAppsWidget::class,
            MostBlockedAppsWidget::class,
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            TotalUsersChart::class,
        ];
    }
}