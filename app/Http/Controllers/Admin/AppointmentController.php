<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AppointmentController extends Controller
{
    public function index(): View
    {
        return view('pages.appointment.index', [
            'appointments' => Appointment::all(),
        ]);
    }
    public function confirm(Request $request, Appointment $appointment): RedirectResponse
    {
        $data = $request->validate([
            'tanggal_appointment' => 'required|date',
        ]);

        $appointment->tanggal_appointment = $data['tanggal_appointment'];
        $appointment->status = 'confirmed';

        $appointment->update();

        return $this->redirectBack('success', 'Pengajuan konsultasi berhasil dikonfirmasi');
    }

    public function cancel(Appointment $appointment): RedirectResponse
    {
        $appointment->status = 'cancelled';
        $appointment->update();

        return $this->redirectBack('success', 'Pengajuan konsultasi berhasil dibatalkan');
    }
}
