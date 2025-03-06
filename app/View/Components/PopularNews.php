<?php

namespace App\View\Components;

use App\Models\News;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PopularNews extends Component
{
    /**
     * Create a new component instance.
     */
    public $popular_news;
    public function __construct()
    {
      $this->popular_news = News::orderBy('views', 'DESC')->take(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.popular-news');
    }
}
