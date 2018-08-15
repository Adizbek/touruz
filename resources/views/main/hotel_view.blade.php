@extends('main.layout')

@section('nav.hotels')
    class="active"
@endsection

@section('content')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url({{url($hotel->poster)}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>{!!  $hotel->stars()!!}</h2>
                                    <h1>{{$hotel->name}}</h1>
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
                                <div>
                                    {{ Breadcrumbs::render('hotel.view', $hotel) }}
                                </div>

                                <div class="meta">
                                    <p>
                                        <span>{{$hotel->date()}}</span>
                                    </p>
                                </div>
                                <h2>{{$hotel->name}}</h2>
                                <div>{!! $hotel->full !!}</div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sidebar-wrap">
                        <div class="side animate-box">
                            <h3 class="sidebar-heading">Фото</h3>

                            @foreach($hotel->media() as $media)
                                <img style="padding-bottom: 10px" class="img-bordered" width="100%"
                                     src="{{url($media->url)}}" alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection