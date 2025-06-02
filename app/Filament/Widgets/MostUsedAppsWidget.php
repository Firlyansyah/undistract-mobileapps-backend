<?php

namespace App\Filament\Widgets;

use App\Models\DailyLimit;
use App\Models\VariableSession;
use App\Models\BlockPermanent;
use App\Models\BlockSchedule;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\DB;

class MostUsedAppsWidget extends BaseWidget
{
    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        // Menggunakan model Eloquent untuk setiap tabel
        $variableSessions = VariableSession::select('id', 'appName', DB::raw('COUNT(*) as usage_count'))
            ->groupBy('id', 'appName');

        $dailyLimits = DailyLimit::select('id', 'appName', DB::raw('COUNT(*) as usage_count'))
            ->groupBy('id', 'appName');

        $blockPermanents = BlockPermanent::select('id', 'appName', DB::raw('COUNT(*) as usage_count'))
            ->groupBy('id', 'appName');

        $blockSchedules = BlockSchedule::select('id', 'appName', DB::raw('COUNT(*) as usage_count'))
            ->groupBy('id', 'appName');

        // Menggabungkan semua query dengan UNION
        $combinedQuery = $variableSessions->union($dailyLimits)
            ->union($blockPermanents)
            ->union($blockSchedules);

        // Menggunakan model Eloquent untuk query akhir
        return VariableSession::fromSub($combinedQuery, 'combined')
            ->select('id', 'appName', DB::raw('SUM(usage_count) as total_usage'))
            ->groupBy('id', 'appName')
            ->orderBy('total_usage', 'desc');
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('appName')->label('App Name'),
            TextColumn::make('total_usage')->label('Total Usage'),
        ];
    }

    public function getTableRecordsPerPage(): int
    {
        return 5; // Batasi hanya 5 record
    }

    // Mengubah access level method getTableRecordKey() menjadi public
    public function getTableRecordKey($record): string
    {
        return $record->id;
    }
}