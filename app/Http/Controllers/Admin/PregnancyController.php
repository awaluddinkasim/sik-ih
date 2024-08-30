<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PregnancyController extends Controller
{
    public function index(): View
    {
        return view('pages.pregnancy.index', [
            'pregnancies' => User::has('kehamilan')->with('kehamilan')->get(),
        ]);
    }
}
