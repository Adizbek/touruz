@extends('main.layout')

@section('content')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2017/01/31/1112/Hyatt-Regency-Tashkent-P046-Exterior-Night-View.adapt.16x9.1920.1080.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>Отель</h2>
                                    <h1>Как вы хотели</h1>
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
                <div class="col-md-12">
                    <h1>Отели</h1>
                    <div>{{Breadcrumbs::render('hotels')}}</div>
                    <div class="row">
                        <div class="wrap-division">
                            @foreach($hotels as $hotel)
                                <div class="col-md-4 col-sm-4 animate-box">
                                    <div class="hotel-entry">
                                        <a href="{{route('hotel.view', ['id' => $hotel->id])}}" class="hotel-img"
                                           style="background-image: url({{$hotel->poster}});">
                                            <p class="price"><span>{{$hotel->price}}$</span>
                                                <small> / ночь</small>
                                            </p>
                                        </a>

                                        <div class="desc">
                                            <h3>
                                                <a href="{{route('hotel.view', ['id' => $hotel->id])}}">{{ $hotel->name }}</a>
                                                @include('widget.stars', ['stars'=> $hotel->stars])
                                            </h3>
                                            <span class="place">{{$hotel->city()->name}}</span>
                                            <small class="city">
                                                {{$hotel->reviews()->count()}} Reviews
                                            </small>
                                            <p style="height: 40px">{{mb_substr($hotel->short, 0, 100)}}...</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            {{$hotels->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection