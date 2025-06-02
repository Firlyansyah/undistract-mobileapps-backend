<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\DashboardService;
use Illuminate\Http\JsonResponse;

class DashboardController extends Controller
{
    protected $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }

    public function getTotalUsers(): JsonResponse
    {
        return response()->json([
            'total_users' => $this->dashboardService->getTotalUsers()
        ]);
    }

    public function getMostUsedApps(): JsonResponse
    {
        return response()->json([
            'most_used_apps' => $this->dashboardService->getMostUsedApps()
        ]);
    }

    public function getMostBlockedApps(): JsonResponse
    {
        return response()->json([
            'most_blocked_apps' => $this->dashboardService->getMostBlockedApps()
        ]);
    }
}