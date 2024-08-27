<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PregnancyController extends Controller
{
    public function index(): View
    {
        return view('pages.pregnancy.index');
    }
}
