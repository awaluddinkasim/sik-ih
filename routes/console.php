<?php

use Carbon\Carbon;
use App\Models\User;
use App\Models\Pregnancy;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::call(function () {
    $pregnancies = Pregnancy::where('is_active', 1)->get();

    foreach ($pregnancies as $pregnancy) {
        $tanggalHariPertamaHaidTerakhir = Carbon::parse($pregnancy->tanggal_hari_pertama_haid_terakhir);

        $usiaKehamilan = calculateGestationalAge($tanggalHariPertamaHaidTerakhir);
        $pregnancy = $pregnancy->update([
            'usia_kehamilan' => $usiaKehamilan,
        ]);
    }
})->daily();
