@extends('main.layout')

@section('content')

    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/uzb-15.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>Новости</h2>
                                    <h1>Узбекистана</h1>
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
                <div class="col-xs-12">
                    <h1>Новости Узбекистана </h1>
                    <hr>
                </div>

                <div class="col-md-8">
                    <div class="wrap-division">
                        @foreach($news as $ne)
                            <article class="animate-box">
                                <div class="blog-img" style="background-image: url({{$ne->poster}});"></div>
                                <div class="desc">
                                    <div class="meta">
                                        <p>
                                            <span>{{$ne->created_at->format('M d, Y')}}</span>
                                            <span>{{$ne->city()->name}}</span>
                                        </p>
                                    </div>
                                    <h2><a href="#">{{$ne->title}}</a></h2>
                                    <p>{{$ne->short}}</p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{$news->links()}}
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sidebar-wrap">
                        <div class="side animate-box">
                            <h3 class="sidebar-heading">Последные новости</h3>
                            <div class="blog-entry-side">
                                @foreach($latest as $ne)
                                    <a href="blog.html" class="blog-post">
                                        <span class="img" style="background-image: url({{$ne->poster}});"></span>
                                        <div class="desc">
                                            <span class="date">{{$ne->created_at->format("M d, Y")}}</span>
                                            <h3>{{$ne->title}}</h3>
                                            <span class="cat">{{$ne->city()->name}}</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <div class="side animate-box">
                            <div class="sidebar-heading">Города</div>
                            <ul class="category">
                                <li><b><a href="{{route('news')}}">Все</a></b></li>

                                @foreach($cities as $city)
                                    <li><a href="{{route('news', ['city' => $city->id])}}">{{$city->name}}
                                            <span>({{$city->news()->count()}})</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection