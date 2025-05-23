<?php

namespace App\Http\Controllers\Api;

use App\Models\BlockPermanent;
use App\Models\BlockSchedule;
use App\Models\VariableSession;
use App\Http\Controllers\Controller;
use App\Models\DailyLimit;
use Illuminate\Http\Request;

class SyncController extends Controller
{
    public function syncAll(Request $request)
    {
        // Hardcode userId untuk testing
        $userId = 1;

        // Sync BlockSchedules
        foreach ($request->input('blockSchedules', []) as $bs) {
            BlockSchedule::updateOrCreate(
                ['id' => $bs['id'], 'userId' => $userId],
                [
                    'id' => $bs['id'],
                    'userId' => $userId,
                    'appName' => $bs['appName'],
                    'packageName' => $bs['packageName'],
                    'daysOfWeek' => $bs['daysOfWeek'],
                    'isAllDay' => $bs['isAllDay'],
                    'startTime' => $bs['startTime'],
                    'endTime' => $bs['endTime'],
                    'isActive' => $bs['isActive'],
                    'isParental' => $bs['isParental'],
                ]
            );
        }

        // Sync VariableSessions
        foreach ($request->input('variableSession', []) as $vs) {
            VariableSession::updateOrCreate(
                ['appName' => $vs['appName'], 'packageName' => $vs['packageName'], 'userId' => $userId],
                [
                    'id' => $bs['id'],
                    'userId' => $userId,
                    'secondsLeft' => $vs['secondsLeft'],
                    'coolDownDuration' => $vs['coolDownDuration'],
                    'coolDownEndTime' => $vs['coolDownEndTime'],
                    'isOnCoolDown' => $vs['isOnCoolDown'],
                    'isActive' => $vs['isActive'],
                    'isParental' => $vs['isParental'],
                ]
            );
        }

        // Sync BlockPermanents
        foreach ($request->input('blockPermanents', []) as $bp) {
            BlockPermanent::updateOrCreate(
                ['packageName' => $bp['packageName'], 'userId' => $userId],
                [
                    'id' => $bs['id'],
                    'userId' => $userId,
                    'appName' => $bp['appName'],
                    'isParental' => $bp['isParental'],
                ]
            );
        }

        // Sync DailyLimits
        foreach ($request->input('dailyLimits', []) as $dl) {
            DailyLimit::updateOrCreate(
                ['id' => $dl['id'], 'userId' => $userId],
                [
                    'id' => $bs['id'],
                    'userId' => $userId,
                    'appName' => $dl['appName'],
                    'packageName' => $dl['packageName'],
                    'icon' => $dl['icon'],
                    'timeLimitMinutes' => $dl['timeLimitMinutes'],
                    'isActive' => $dl['isActive'],
                    'isParental' => $dl['isParental'],
                    'notificationType' => $dl['notificationType'],
                ]
            );
        }
        return response()->json(['message' => 'Data synced successfully.'], 200);
    }
}
