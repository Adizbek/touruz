@extends('main.layout')

@section('content')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/uzb-4.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>Неповторимые</h2>
                                    <h1>Памятники</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div class="colorlib-wrap">
        <div class="container">
            <div class="row">
                <div>
                    {{Breadcrumbs::render('monuments')}}
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="wrap-division">
                            @foreach($monuments as $m)
                                <div class="col-md-4 col-sm-4 animate-box">
                                    <div class="hotel-entry">
                                        <a href="{{route('monument.view', ['id' => $m->id])}}" class="hotel-img"
                                           style="background-image: url({{url($m->poster)}});">
                                        </a>
                                        <div class="desc">
                                            <h3>
                                                <a href="{{route('monument.view', ['id' => $m->id])}}">{{$m->name}}</a>
                                            </h3>
                                            <span class="place">{{$m->city()}}</span>
                                            <p style="height: 120px">{{$m->short}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            {{$monuments->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection