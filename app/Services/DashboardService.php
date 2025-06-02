<?php

namespace App\Services;

use App\Models\User;
use App\Models\BlockPermanent;
use Illuminate\Support\Facades\DB;

class DashboardService
{
    public function getTotalUsers()
    {
        return User::count();
    }

    public function getMostUsedApps()
    {
        return DB::table('app_usage_logs')
            ->select('appName', DB::raw('COUNT(*) as usage_count'))
            ->groupBy('appName')
            ->orderBy('usage_count', 'desc')
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