<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ArticlesController extends Controller
{
    public function index(){
        $articles = App\Article::paginate(5);
        
        return view('articles.articles', compact('articles'));
    }

    public function article($id){
    
        $article = App\Article::find($id);
        return view('articles.article', compact('article'));
    }

    public function destroy($id){
        App\Article::find($id)->delete();
        return redirect(route('articles'));
    }
}
