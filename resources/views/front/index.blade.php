



@extends('layouts.front')



@section('content')

@if($category == null)
    <header>
        <h3 class="title-head">All around the world</h3>
    </header>
@else
    <header>
        <h3 class="title-head">{{$category->name}}</h3>
    </header>
@endif
    @foreach ($articles as $article)
        <div class="article">
            <div class="article-left">
                <a href="/about/{{$article->id}}"><img height="300px" src={{ $article->image }}></a>
            </div>
            <div class="article-right">
                <div class="article-title">
                    <p>On {{ $article->created_at }} <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>{{ $article->comments_count}} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>{{ $article->views }} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>{{ $article->count_likes}}</a></p>
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


    {{ $articles->links() }}
@endsection


