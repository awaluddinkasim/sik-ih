<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function get(): JsonResponse
    {
        return $this->jsonSuccess([
            'articles' => ArticleResource::collection(Article::all()),
        ]);
    }
}
