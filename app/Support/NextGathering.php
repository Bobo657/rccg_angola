<?php

namespace App\Support;

use Carbon\CarbonInterface;
use Illuminate\Support\Carbon;

/**
 * Works out the next public weekly gathering from config('church.programs'),
 * in the parish's own timezone, so the site can say "Tomorrow, 18:00".
 */
class NextGathering
{
    /**
     * @return array{name: string, label: string, time: string, live: bool}|null
     */
    public static function find(?CarbonInterface $now = null): ?array
    {
        $now = Carbon::instance($now ?? now())->setTimezone(config('church.timezone'));
        $best = null;

        foreach (config('church.programs') as $program) {
            if (! isset($program['dow'], $program['start'], $program['end'])) {
                continue;
            }

            [$h, $m] = array_map('intval', explode(':', $program['start']));
            [$eh, $em] = array_map('intval', explode(':', $program['end']));

            $start = $now->copy()->startOfDay()->addDays(($program['dow'] - $now->dayOfWeek + 7) % 7)->setTime($h, $m);
            $end = $start->copy()->setTime($eh, $em);

            if ($now->between($start, $end)) {
                return ['name' => $program['name'], 'label' => 'Happening now', 'time' => $program['time'], 'live' => true];
            }

            if ($end->lte($now)) {
                $start->addWeek();
            }

            if ($best === null || $start->lt($best['start'])) {
                $best = ['start' => $start, 'program' => $program];
            }
        }

        if ($best === null) {
            return null;
        }

        $start = $best['start'];
        $day = match (true) {
            $start->isSameDay($now) => 'Today',
            $start->isSameDay($now->copy()->addDay()) => 'Tomorrow',
            default => $start->format('l'),
        };

        return [
            'name' => $best['program']['name'],
            'label' => $day.', '.ltrim($start->format('H:i'), '0'),
            'time' => $best['program']['time'],
            'live' => false,
        ];
    }
}
