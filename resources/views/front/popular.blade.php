@extends('layouts.front')

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

<div class="popular-post-grid">
    <div class="post-img">
        <a href="single.html"><img src="{{asset('images/bus2.jpg')}}" alt="" /></a>
    </div>
    <div class="post-text">
        <a class="pp-title" href="single.html"> The section of the mass media industry</a>
        <p>On Feb 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>3 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
    </div>
    <div class="clearfix"></div>
</div>
<div class="popular-post-grid">
    <div class="post-img">
        <a href="single.html"><img src="{{asset('images/bus1.jpg')}}" alt="" /></a>
    </div>
    <div class="post-text">
        <a class="pp-title" href="single.html"> Lorem Ipsum is simply dummy text printing</a>
        <p>On Apr 14 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>2 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
    </div>
    <div class="clearfix"></div>
</div>
<div class="popular-post-grid">
    <div class="post-img">
        <a href="single.html"><img src="{{asset('images/bus3.jpg')}}" alt="" /></a>
    </div>
    <div class="post-text">
        <a class="pp-title" href="single.html">There are many variations of Lorem</a>
        <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
    </div>
    <div class="clearfix"></div>
</div>
<div class="popular-post-grid">
    <div class="post-img">
        <a href="single.html"><img src="{{asset('images/bus4.jpg')}}" alt="" /></a>
    </div>
    <div class="post-text">
        <a class="pp-title" href="single.html">Sed ut perspiciatis unde omnis iste natus</a>
        <p>On Jan 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>1 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
    </div>
    <div class="clearfix"></div>
</div>
