<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class TotalUsersChart extends ChartWidget
{
    protected static ?string $heading = 'Total Users Over Time';

    protected function getData(): array
    {
        $users = User::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('COUNT(*) as count')
        )
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'New Users',
                    'data' => $users->pluck('count'),
                ],
            ],
            'labels' => $users->pluck('date'),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}