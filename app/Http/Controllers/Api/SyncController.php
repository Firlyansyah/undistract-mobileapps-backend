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
                [
                    'uuid' => $bs['uuid'],
                    'userId' => $userId
                ],
                [
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

        BlockSchedule::where('userId', $userId)
            ->whereNotIn('uuid', $request->input('existingUuids.blockSchedules', []))
            ->delete();

        // Sync VariableSessions
        foreach ($request->input('variableSessions', []) as $vs) {
            VariableSession::updateOrCreate(
                [
                    'appName' => $vs['appName'],
                    'packageName' => $vs['packageName'],
                    'userId' => $userId
                ],
                [
                    'uuid' => $vs['uuid'],
                    'secondsLeft' => $vs['secondsLeft'],
                    'coolDownDuration' => $vs['coolDownDuration'],
                    'coolDownEndTime' => $vs['coolDownEndTime'] ?? null,
                    'isOnCoolDown' => $vs['isOnCoolDown'],
                    'isActive' => $vs['isActive'],
                    'isParental' => $vs['isParental'],
                ]
            );
        }

        VariableSession::where('userId', $userId)
            ->whereNotIn('uuid', $request->input('existingUuids.variableSessions', []))
            ->delete();

        // Sync BlockPermanents
        foreach ($request->input('blockPermanents', []) as $bp) {
            BlockPermanent::updateOrCreate(
                [
                    'uuid' => $bs['uuid'],
                    'userId' => $userId
                ],
                [
                    'appName' => $bp['appName'],
                    'packageName' => $bp['packageName'],
                    'isActive' => $bp['isActive'],
                    'isParental' => $bp['isParental'],
                ]
            );
        }

        BlockPermanent::where('userId', $userId)
            ->whereNotIn('uuid', $request->input('existingUuids.blockPermanents', []))
            ->delete();

        // Sync DailyLimits
        foreach ($request->input('dailyLimits', []) as $dl) {
            DailyLimit::updateOrCreate(
                [
                    'uuid' => $bs['uuid'],
                    'userId' => $userId
                ],
                [
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

        DailyLimit::where('userId', $userId)
            ->whereNotIn('uuid', $request->input('existingUuids.dailyLimits', []))
            ->delete();

        return response()->json(['message' => 'Data synced successfully.'], 200);
    }
}
