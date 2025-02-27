@extends('layouts.front')

@section('popularNews')

    @foreach ($popular_news as $news)

        <x-div class="popular-grid">
            <a href="#"><img src="{{asset('images/popular-4.jpg')}}" alt="" /></a>
            <a class="title" href="#">{{$news->title}}</a>
            <p>On {{ $news->created_at }} <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>{{ $news->comments}} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>{{ $news->views }} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>{{ $news->count_likes}}</a></p>
        </x-div>

    @endforeach
@endsection


@section('category')
    <x-div class="categories">
        <x-header>
            <h3 class="side-title-head">Categories</h3>
        </x-header>
        <ul>
            @foreach ($categories as $category)

                <li><a href="/category/{{$category->id}}">{{$category->name}}({{$category->articles_count}})</a></li>
            @endforeach

        </ul>
    </x-div>
@endsection





@section('popular')
    @foreach ($popular_articles as $article)

        <x-div class="popular-post-grid">
            <div class="post-img">
                <a href="#"><img src="{{$article->image}}" alt="" /></a>
            </div>
            <div class="post-text">
                <a class="pp-title" href="#"> {{$article->title}}</a>

                <p>On {{ $article->created_at }} <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>{{ $article->comments}} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>{{ $article->views }} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>{{ $article->count_likes}}</a></p>
            </div>
            <div class="article-text">

                <p>{{ $article->content }}.....</p>
                <a href="/about/{{$article->id}}"></a>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </x-div>
    @endforeach
@endsection
