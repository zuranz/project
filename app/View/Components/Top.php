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
    public $popular_articles;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
      $this->popular_articles = Article::orderBy('views', 'DESC')->take(5)->withCount('comments')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {



        return view('components.top');
    }
}
