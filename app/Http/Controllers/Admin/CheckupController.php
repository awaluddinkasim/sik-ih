<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CheckupController extends Controller
{
    public function index(): View
    {
        return view('pages.checkup.index');
    }
}
