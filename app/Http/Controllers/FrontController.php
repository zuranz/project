<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\News;
use App\Models\Comments;
use App\Models\User;
use App\View\Components\Top;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{

    private $component;
    public function __construct()
    {

        $this->component = new Top();


    }
    public function index()
    {

//        $categories = Category::withCount('article')->get();
        $articles = Article::withCount('comments')->paginate(6);

//        $popular_articles = Article::orderBy('views', 'DESC')->take(5)->get();
//        $popular_news = News::orderBy('views', 'DESC')->take(3)->get()
        $category = null;
        return view('front.index',compact('articles', 'category'));
//        return view('front.popular',compact('popular_articles'));

    }

    public function singlArticle($id)
    {
        $article = Article::where('id', $id)->first();
        $categories = Category::where('id', $article->category_id)->first();
        $comments = Comments::where('article_id', $id)->with('user')->get();

        return view('front.about',compact('article', 'categories', 'comments' ));


    }

    public function CategoryArticles(Category $category)
    {
//        $categories = Category::all();
        $articles = $category->articles()->withCount('comments')->paginate(6);
        //dd($category);
        //$articles = Article::where('category_id', $id)->paginate(5);
        //$category =Category::where('id', $id)->first();
//        $popular_articles = Article::orderBy('views', 'DESC')->take(5)->get();
//        $popular_news = News::orderBy('views', 'DESC')->take(3)->get();
        return view('front.index',compact('articles', 'category'));
    }

    public function CreatNewComment(int $idart, Request $request)
    {

        $comment = $request;
        if(isset($comment['submit']))
        {
            if($comment['content'] != null)
            {

                $user_id = Session::get('user')->id;
                DB::table('comments')->insert([
                    'content' => $comment['content'],
                    'user_id' => $user_id,
                    'article_id' => $idart,
                    'created_at' => now(),
                ]);
                return redirect()->back();
            }
            else
            {
                return redirect()->back();
            }

        }

    }


    public  function authuser(User $user)
    {
        return $user->isAdmin;
    }

}
