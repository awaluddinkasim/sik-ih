<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        return view('pages.article.index');
    }

    public function detail(): View
    {
        return view('pages.article.detail');
    }
}
