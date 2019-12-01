<?php

namespace App\Http\Controllers;

use App;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(5);

        return view('articles.articles', ['articles' => $articles]);
    }

    public function article(Article $article)
    {
        return view('articles.article', ['article' => $article]);
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('articles'));
    }
}
