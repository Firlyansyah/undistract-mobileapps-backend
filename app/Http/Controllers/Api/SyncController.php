<?php

namespace App\Http\Controllers\Api;

use App\Models\BlockPermanent;
use App\Models\BlockSchedule;
use App\Models\VariableSession;
use App\Http\Controllers\Controller;
use App\Models\DailyLimit;
use App\Models\UserParent;
use Illuminate\Http\Request;

class SyncController extends Controller
{
    public function syncAll(Request $request)
    {
        $userId = $request->query('userId');
        if (!$userId) {
            return response()->json(['message' => 'userId is required'], 400);
        }

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
                    'isSynced' => $bs['isSynced']
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
                    'uuid' => $vs['uuid'],
                    'userId' => $userId
                ],
                [
                    'appName' => $vs['appName'],
                    'packageName' => $vs['packageName'],
                    'secondsLeft' => $vs['secondsLeft'],
                    'coolDownDuration' => $vs['coolDownDuration'],
                    'coolDownEndTime' => $vs['coolDownEndTime'] ?? null,
                    'isOnCoolDown' => $vs['isOnCoolDown'],
                    'isActive' => $vs['isActive'],
                    'isParental' => $vs['isParental'],
                    'isSynced' => $vs['isSynced']
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
                    'uuid' => $bp['uuid'],
                    'userId' => $userId
                ],
                [
                    'appName' => $bp['appName'],
                    'packageName' => $bp['packageName'],
                    'isActive' => $bp['isActive'],
                    'isParental' => $bp['isParental'],
                    'isSynced' => $bp['isSynced']
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
                    'uuid' => $dl['uuid'],
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
                    'isSynced' => $dl['isSynced']
                ]
            );
        }

        DailyLimit::where('userId', $userId)
            ->whereNotIn('uuid', $request->input('existingUuids.dailyLimits', []))
            ->delete();

        // Sync user parent (PIN)
        foreach ($request->input('userParents', []) as $up) {
            UserParent::updateOrCreate(
                [
                    'userId' => $userId
                ],
                [
                    'pin' => $up['pin'],
                    'email' => $up['email']
                ]
            );
        }

        return response()->json(['message' => 'Data synced successfully.'], 200);
    }

    public function fetchAll(Request $request)
    {
        $userId = $request->query('userId');

        $blockSchedules = BlockSchedule::where('userId', $userId)->get();
        $variableSessions = VariableSession::where('userId', $userId)->get();
        $blockPermanents = BlockPermanent::where('userId', $userId)->get();
        $dailyLimits = DailyLimit::where('userId', $userId)->get();
        $userParents = UserParent::where('userId', $userId)->get();

        return response()->json([
            'blockSchedules' => $blockSchedules,
            'variableSessions' => $variableSessions,
            'blockPermanents' => $blockPermanents,
            'dailyLimits' => $dailyLimits,
            'userParents' => $userParents
        ]);
    }
}
