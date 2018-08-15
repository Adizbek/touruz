@extends('main.layout')


@section('nav.monuments')
    class="active"
@endsection


@section('content')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url({{url($monument->poster)}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>{{$monument->city()}}</h2>
                                    <h1>{{$monument->name}}</h1>
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
                                        {{ Breadcrumbs::render('monument.view', $monument) }}
                                    </div>
                                </div>
                                <h2>
                                    {{$monument->name}}
                                    <br>
                                    <small>{{$monument->city()}}</small>
                                </h2>

                                <div>{!! $monument->full !!}</div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sidebar-wrap">
                        <div class="side animate-box">
                            <h3 class="sidebar-heading">Другие памятники</h3>

                            @foreach($random as $news)
                                <div class="blog-entry-side">
                                    <a href="{{route('monument.view', ['id' => $news->id])}}" class="blog-post">
                                        <span class="img" style="background-image: url({{url($news->poster)}});"></span>
                                        <div class="desc">
                                            <h3>{{$news->name}}</h3>
                                            <span class="cat">{{$news->city()}}</span>
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