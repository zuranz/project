
    @foreach ($popular_articles as $article)

        <div class="popular-post-grid">
            <div class="post-img">
                <a href="#"><img src="{{$article->image}}" alt="" /></a>
            </div>
            <div class="post-text">
                <a class="pp-title" href="#"> {{$article->title}}</a>

                <p>On {{ $article->created_at }} <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>{{ $article->comments_count}} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>{{ $article->views }} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>{{ $article->count_likes}}</a></p>
            </div>
            <div class="article-text">

                <p>{{ $article->content }}.....</p>
                <a href="/about/{{$article->id}}"></a>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    @endforeach







