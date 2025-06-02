<?php

namespace App\Services;

use App\Models\User;
use App\Models\BlockPermanent;
use App\Models\DailyLimit;
use App\Models\VariableSession;
use App\Models\BlockSchedule;
use Illuminate\Support\Facades\DB;

class DashboardService
{
    public function getTotalUsers()
    {
        return User::count();
    }

    public function getMostUsedApps()
    {
        $variableSessions = VariableSession::select('id', 'appName', DB::raw('COUNT(*) as usage_count'))
            ->groupBy('id', 'appName');

        $dailyLimits = DailyLimit::select('id', 'appName', DB::raw('COUNT(*) as usage_count'))
            ->groupBy('id', 'appName');

        $blockPermanents = BlockPermanent::select('id', 'appName', DB::raw('COUNT(*) as usage_count'))
            ->groupBy('id', 'appName');

        $blockSchedules = BlockSchedule::select('id', 'appName', DB::raw('COUNT(*) as usage_count'))
            ->groupBy('id', 'appName');

        $combinedQuery = $variableSessions->union($dailyLimits)
            ->union($blockPermanents)
            ->union($blockSchedules);

        return VariableSession::fromSub($combinedQuery, 'combined')
            ->select('id', 'appName', DB::raw('SUM(usage_count) as total_usage'))
            ->groupBy('id', 'appName')
            ->orderBy('total_usage', 'desc')
            ->limit(5)
            ->get();
    }

    public function getMostBlockedApps()
    {
        return BlockPermanent::select('appName', DB::raw('COUNT(*) as block_count'))
            ->groupBy('appName')
            ->orderBy('block_count', 'desc')
            ->limit(5)
            ->get();
    }
}