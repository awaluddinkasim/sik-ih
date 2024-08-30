<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        return view('pages.article.index', [
            'articles' => Article::all(),
        ]);
    }

    public function create(): View
    {
        return view('pages.article.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'gambar' => 'required|image',
            'judul' => 'required',
            'konten' => 'required',
        ]);

        $gambar = $request->file('gambar');
        $filename = time() . '.' . $gambar->extension();
        $data['gambar'] = $filename;
        $gambar->move(public_path('files/article'), $filename);

        Article::create($data);

        return $this->redirect(route('article.index'), 'success', 'Artikel berhasil ditambahkan');
    }

    public function detail(Article $article): View
    {
        return view('pages.article.detail', compact('article'));
    }

    public function edit(Article $article): View
    {
        return view('pages.article.edit', compact('article'));
    }

    public function update(Article $article, Request $request)
    {
        $data = $request->validate([
            'gambar' => 'nullable|image',
            'judul' => 'required',
            'konten' => 'required',
        ]);

        if (isset($data['gambar'])) {
            File::delete(public_path('files/article/' . $article->gambar));

            $gambar = $request->file('gambar');
            $filename = time() . '.' . $gambar->extension();
            $data['gambar'] = $filename;
            $gambar->move(public_path('files/article'), $filename);
        }

        $article->update($data);

        return $this->redirect(route('article.index'), 'success', 'Artikel berhasil diperbarui');
    }

    public function destroy(Article $article)
    {
        File::delete(public_path('files/article/' . $article->gambar));
        $article->delete();

        return $this->redirect(route('article.index'), 'success', 'Artikel berhasil di hapus');
    }
}
