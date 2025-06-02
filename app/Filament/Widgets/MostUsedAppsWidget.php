<?php

namespace App\Filament\Widgets;

use App\Models\VariableSession;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\DB;

class MostUsedAppsWidget extends BaseWidget
{
    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return VariableSession::query()
            ->select('id', 'appName', DB::raw('COUNT(*) as usage_count'))
            ->groupBy('id', 'appName')
            ->orderBy('usage_count', 'desc');
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('appName')->label('App Name'),
            TextColumn::make('usage_count')->label('Usage Count'),
        ];
    }

    public function getTableRecordsPerPage(): int
    {
        return 5; // Batasi hanya 5 record
    }
}