<?php

namespace App\View\Components;

use App\Models\Article;
use App\Models\Category;
use App\Models\News;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Top extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        $popular_articles = Article::orderBy('views', 'DESC')->take(5)->get();
        $popular_news = News::orderBy('views', 'DESC')->take(3)->get();
        $categories = Category::all();
        return view('components.top', compact('popular_articles', 'popular_news', 'categories'));
    }
}
