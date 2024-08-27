<?php

use Carbon\Carbon;

if (! function_exists('calculateDueDate')) {
    function calculateDueDate(Carbon $lastPeriodDate): Carbon
    {
        // Aturan Naegele: Tambahkan 1 tahun, kurangi 3 bulan, tambahkan 7 hari
        return $lastPeriodDate->addYear()->subMonths(3)->addDays(7);
    }
}

if (! function_exists('calculateGestationalAge')) {
    function calculateGestationalAge(Carbon $lastPeriodDate): int
    {
        $now = Carbon::now();
        $gestationalAge = $now->diffInWeeks($lastPeriodDate);
        return $gestationalAge;
    }
}
