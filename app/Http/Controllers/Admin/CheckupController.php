<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkup;
use App\Models\User;
use App\Models\Pregnancy;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CheckupController extends Controller
{
    public function index(): View
    {
        return view('pages.checkup.index', [
            'checkups' => User::has('kehamilan')->with(['kehamilan'])->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'pregnancy_id' => 'required',
            'tanggal_pemeriksaan' => 'required',
            'berat_badan' => 'required',
            'tekanan_darah_sistol' => 'required',
            'tekanan_darah_diastol' => 'required',
            'catatan' => 'nullable',
        ]);

        Checkup::create($data);

        return $this->redirectBack('success', 'Pemeriksaan kesehatan berhasil ditambahkan');
    }

    public function detail(Pregnancy $pregnancy): View
    {
        return view('pages.checkup.detail', [
            'pregnancy' => $pregnancy,
            'checkups' => Checkup::where('pregnancy_id', $pregnancy->id)->orderBy('tanggal_pemeriksaan', 'desc')->get(),
        ]);
    }
}
