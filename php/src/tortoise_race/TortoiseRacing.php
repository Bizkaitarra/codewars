<?php

namespace App\tortoise_race;


final class TortoiseRacing
{
    public static function race($feetsPerHour1, $feetsPerHour2, $feetsInAdvantage): ?array {
        $feetRecoveredEachHour = $feetsPerHour2 - $feetsPerHour1;
        if ($feetRecoveredEachHour <= 0) {
            return null;
        }
        $secondsToCatch1 = ($feetsInAdvantage / $feetRecoveredEachHour) * 3600;

        $hours = 0;
        if ($secondsToCatch1 > 3600) {
            $hours = floor($secondsToCatch1 / 3600);
            $secondsToCatch1 = $secondsToCatch1 - ($hours * 3600);
        }
        $minutes = 0;
        if ($secondsToCatch1 > 60) {
            $minutes = floor($secondsToCatch1 / 60);
            $secondsToCatch1 = $secondsToCatch1 - ($minutes * 60);
        }

        return [$hours, $minutes, floor($secondsToCatch1)];
    }
}