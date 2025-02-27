<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\News;
use App\Models\Comments;
use App\View\Components\Top;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    private $component;
    public function __construct()
    {

        $this->component = new Top();


    }
    public function index()
    {
        $categories = Category::all();
//        $categories = Category::withCount('articles')->get();
        $articles = Article::paginate(5);

//        $popular_articles = Article::orderBy('views', 'DESC')->take(5)->get();
//        $popular_news = News::orderBy('views', 'DESC')->take(3)->get();
        $this->component->render();
        return view('front.index',compact('articles','categories'));
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
//        $categories = Category::all();
        $articles = Article::where('category_id', $id)->paginate(5);
//        $popular_articles = Article::orderBy('views', 'DESC')->take(5)->get();
//        $popular_news = News::orderBy('views', 'DESC')->take(3)->get();
        return view('front.index',compact('articles'));
    }
}
