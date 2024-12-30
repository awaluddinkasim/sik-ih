<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReportController extends Controller
{
    public function index(): View
    {
        $reports = User::has('konsultasi')->with('konsultasi')->get();

        return view('pages.report.index', compact('reports'));
    }

    public function export()
    {
        $reports = User::has('konsultasi')->with('konsultasi')->get();
        $pdf = Pdf::loadView('exports.pdf', compact('reports'));

        return $pdf->download('laporan-' . time() . '.pdf');
    }
}
