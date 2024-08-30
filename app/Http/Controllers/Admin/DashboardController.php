<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Article;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('pages.dashboard', [
            'users' => User::count(),
            'articles' => Article::count(),
            'pendingAppointments' => Appointment::where('status', 'pending')->count(),
            'confirmedAppointments' => Appointment::where('tanggal_appointment', '>=', Carbon::now())->where('status', 'confirmed')->count(),
        ]);
    }
}
