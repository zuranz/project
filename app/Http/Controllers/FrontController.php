<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\News;
use App\Models\Comments;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $articles = Article::paginate(5);
        $popular_articles = Article::orderBy('views', 'DESC')->take(5)->get();
        $popular_news = News::orderBy('views', 'DESC')->take(3)->get();
        return view('front.index',compact('articles','categories', 'popular_articles', 'popular_news'));
//        return view('front.popular',compact('popular_articles'));

    }

    public function singlArticle($id)
    {
        $article = Article::where('id', $id)->first();
        $categories = Category::where('id', $article->category_id)->first();
        $comments = Comments::where('article_id', $id)->get();
        return view('front.about',compact('article', 'categories', 'comments' ));


    }

    public function CategoryArticles($id)
    {
        $categories = Category::all();
        $articles = Article::where('category_id', $id)->paginate(5);
        $popular_articles = Article::orderBy('views', 'DESC')->take(5)->get();
        $popular_news = News::orderBy('views', 'DESC')->take(3)->get();
        return view('front.index',compact('articles','categories', 'popular_articles', 'popular_news'));
    }
}
