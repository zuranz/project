



@extends('layouts.front')

@section('popularNews')
    @foreach ($popular_news as $news)

        <div class="popular-grid">
            <a href="single.html"><img src="{{asset('images/popular-4.jpg')}}" alt="" /></a>
            <a class="title" href="single.html">{{$news->title}}</a>
            <p>On {{ $news->created_at }} <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>{{ $news->comments}} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>{{ $news->views }} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>{{ $news->count_likes}}</a></p>
        </div>

    @endforeach
@endsection


@section('category')
    <div class="categories">
        <header>
            <h3 class="side-title-head">Categories</h3>
        </header>
        <ul>
            @foreach ($categories as $category)

                <li><a href="/category/{{$category->id}}">{{$category->name}}({{$category->articles_count}})</a></li>
            @endforeach

        </ul>
    </div>
@endsection





@section('popular')
    @foreach ($popular_articles as $article)

        <div class="popular-post-grid">
            <div class="post-img">
                <a href="single.html"><img src="{{$article->image}}" alt="" /></a>
            </div>
            <div class="post-text">
                <a class="pp-title" href="single.html"> {{$article->title}}</a>

                <p>On {{ $article->created_at }} <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>{{ $article->comments}} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>{{ $article->views }} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>{{ $article->count_likes}}</a></p>
            </div>
            <div class="article-text">

                 <p>{{ $article->content }}.....</p>
                <a href="/about/{{$article->id}}"></a>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    @endforeach
@endsection






@section('content')



    @foreach ($articles as $article)
        <div class="article">
            <div class="article-left">
                <a href="/about/{{$article->id}}"><img height="300px" src={{ $article->image }}></a>
            </div>
            <div class="article-right">
                <div class="article-title">
                    <p>On {{ $article->created_at }} <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>{{ $article->comments}} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>{{ $article->views }} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>{{ $article->count_likes}}</a></p>
                    <a class="title" href="/about/{{$article->id}}">{{ $article->title }} </a>
                </div>
                <div class="article-text">

                    <p>{{ $article->content }}.....</p>
                    <a href="/about/{{$article->id}}"><img src="images/more.png" alt="" /></a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    @endforeach

    <div class="article">
        <div class="article-left">
            <a href="/about"><img src="images/article1.jpg"></a>
        </div>
        <div class="article-right">
            <div class="article-title">
                <p>On Feb 25, 2015 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>104 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>52</a></p>
                <a class="title" href="/about"> The section of the mass media industry that focuses on presenting</a>
            </div>
            <div class="article-text">
                <p>The standard chunk of Lorem Ipsum used since the 1500s. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" exact original.....</p>
                <a href="/about"><img src="images/more.png" alt="" /></a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    {{ $articles->links() }}
@endsection


