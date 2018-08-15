@extends('main.layout')

@section('content')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url({{url($news->poster)}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>{{$news->created_at->format('M d, Y')}}</h2>
                                    <h1>{{$news->title}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="colorlib-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="wrap-division">
                        <article class="animate-box">
                            <div class="desc">
                                <div class="meta">
                                    <div>
                                        {{ Breadcrumbs::render('news.view', $news) }}
                                    </div>

                                    <p>
                                        <span>{{$news->date()}}</span>
                                    </p>
                                </div>
                                <h2>{{$news->title}}</h2>

                                <div>{!! $news->full !!}</div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sidebar-wrap">
                        <div class="side animate-box">
                            <h3 class="sidebar-heading">Последные новости</h3>

                            @foreach($latest as $news)
                                <div class="blog-entry-side">
                                    <a href="{{route('news.view', ['id' => $news->id])}}" class="blog-post">
                                        <span class="img" style="background-image: url({{url($news->poster)}});"></span>
                                        <div class="desc">
                                            <span class="date">{{$news->date()}}</span>
                                            <h3>{{$news->title}}</h3>
                                            <span class="cat">{{$news->city()->name}}</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection