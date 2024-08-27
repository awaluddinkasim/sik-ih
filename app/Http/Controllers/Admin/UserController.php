<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view('pages.user.index');
    }

    public function edit(): View
    {
        return view('pages.user.edit');
    }
}
