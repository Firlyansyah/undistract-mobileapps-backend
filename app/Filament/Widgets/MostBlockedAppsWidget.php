<?php

namespace App\Filament\Widgets;

use App\Models\BlockPermanent;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\DB;

class MostBlockedAppsWidget extends BaseWidget
{
    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return BlockPermanent::query()
            ->select('id', 'appName', DB::raw('COUNT(*) as block_count'))
            ->groupBy('id', 'appName')
            ->orderBy('block_count', 'desc');
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('appName')->label('App Name'),
            TextColumn::make('block_count')->label('Block Count'),
        ];
    }

    public function getTableRecordsPerPage(): int
    {
        return 5; // Batasi hanya 5 record
    }
}