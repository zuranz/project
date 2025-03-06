@foreach ($popular_news as $news)

    <div class="popular-grid">
        <a href="#"><img src="{{asset('images/popular-4.jpg')}}" alt="" /></a>
        <a class="title" href="#">{{$news->title}}</a>
        <p>On {{ $news->created_at }} <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>{{ $news->comments}} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>{{ $news->views }} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>{{ $news->count_likes}}</a></p>
    </div>

@endforeach
