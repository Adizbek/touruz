@extends('main.layout')


@section('nav.main')
    class="active"
@endsection

@section('content')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/uzb-1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>Наслаждайся</h2>
                                    <h1>Лучшем отдыхом</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/uzb-4.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>Узбекистан</h2>
                                    <h1>Жемчужина Востока</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/uzb-5.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluids">
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
                <li style="background-image: url(images/uzb-9.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>Experience the</h2>
                                    <h1>Best Trip Ever</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div class="colorlib-tour colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Популярные отели</h2>
                    {{--<p>Большим преимуществом отеля является то, что это прибежище из дома.</p>--}}
                    <p>Отель не похож на дом, но лучше, чем быть гостем дома.</p>
                </div>
            </div>
        </div>
        <div class="tour-wrap">
            @foreach($hotels as $hotel)
                <a href="{{route('hotel.view', ['id' => $hotel->id])}}" class="tour-entry animate-box">
                    <div class="tour-img" style="background-image: url({{$hotel->poster}});">
                    </div>
                    <span class="desc">
						<h2>{{$hotel->name}} @include('widget.stars', ['stars' => $hotel->stars])</h2>
						<span class="city">{{$hotel->address}}</span>
						<span class="price">
                            ${{$hotel->price}}, <small>{{$hotel->reviews->count()}} Reviews</small>
                        </span>
					</span>
                </a>
            @endforeach
        </div>
    </div>

    <div id="colorlib-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Последние новости</h2>
                    <p>Удивительно, что количество новостей, которые происходят в Узбекистане каждый день, всегда точно
                        соответствует нашему сайту.</p>
                </div>
            </div>
            <div class="blog-flex">
                <div class="f-entry-img" style="background-image: url(images/uzb-15.jpg);">
                </div>
                <div class="blog-entry aside-stretch-right">
                    <div class="row">
                        @foreach($news as $ne)
                            <div class="col-md-12 animate-box">
                                <a href="{{ route('news.view', ['id' => $ne->id]) }}" class="blog-post">
                                    <span class="img" style="background-image: url({{$ne->poster}});"></span>
                                    <div class="desc">
                                        <span class="date">{{$ne->created_at->format("M d, Y")}}</span>
                                        <h3>{{$ne->title}}</h3>
                                        <span class="city">
                                            {{$ne->short }}
                                        </span>
                                        <br>
                                        <span class="cat">{{$ne->city()->name}}</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-intro" class="intro-img" style="background-image: url(images/uzb-9.jpg);"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 animate-box">
                    <div class="intro-desc">
                        <div class="text-salebox">
                            {{--<div class="text-lefts">--}}
                            {{--<div class="sale-box">--}}
                            {{--<div class="sale-box-top">--}}
                            {{--<h2 class="number">100</h2>--}}
                            {{--<span class="sup-1">%</span>--}}
                            {{--<span class="sup-2">Off</span>--}}
                            {{--</div>--}}
                            {{--<h2 class="text-sale">Sale</h2>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="text-rights">
                                <h3 class="title">Cказочные Города</h3>
                                <p>Великие архитекторы по истории Узбекистана создали дворцы, мечети, мавзолеи и
                                    всемирно известные памятники древней архитектуры. Многие из этих шедевров не
                                    сохранились, но, посетив те, которые были сохранены, можно заглянуть в страницы
                                    истории уникальной страны.</p>
                                <p>
                                    <a href="#" class="btn btn-primary">Узнать больше</a>
                                    {{--<a href="#" class="btn btn-primary btn-outline">Read more</a>--}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="video-wrap">
                        <div class="video colorlib-video"
                             style="background-image: url(https://i.ytimg.com/vi/GNqZaPM5NeU/maxresdefault.jpg);">
                            <a href="https://mover.uz/video/embed/i1dfUqMm/" class="popup-vimeo"><i
                                        class="icon-video"></i></a>
                            <div class="video-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-hotel">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Рекомендуемые отели</h2>
                    <p>В большинстве этих гостиниц нам предоставляют гарантированный блок комнат по лучшим ценам и
                        приоритет в
                        подтверждении заявок, что очень удобно как для наших партнеров, так и для наших туристов.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box">
                    <div class="owl-carousel">
                        @foreach($recommend as $r)
                            <div class="item">
                                <div class="hotel-entry">
                                    <a href="{{route('hotel.view', ['id' =>$r->id])}}" class="hotel-img"
                                       style="background-image: url({{url($r->poster)}});">
                                        <p class="price"><span>${{$r->price}}</span>
                                            <small> /ночь</small>
                                        </p>
                                    </a>
                                    <div class="desc">
                                        <p class="star">{!! $r->stars() !!} {{$r->reviews()->count()}} отзыва</p>
                                        <h3><a href="#">{{$r->name}}</a></h3>
                                        <span class="place">{{$r->city()}}</span>
                                        <p>{{$r->short}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div id="colorlib-testimony" class="colorlib-light-grey">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">--}}
                    {{--<h2>Удовлетворенный путешественник в Узбекистан рассказывает:</h2>--}}
                    {{--<p>Наша природа заключается в движении; полное спокойствие - это смерть.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-8 col-md-offset-2 animate-box">--}}
                    {{--<div class="owl-carousel2">--}}
                        {{--<div class="item">--}}
                            {{--<div class="testimony text-center">--}}
                                {{--<span class="img-user" style="background-image: url(images/person1.jpg);"></span>--}}
                                {{--<span class="user">Alysha Myers</span>--}}
                                {{--<small>Miami Florida, USA</small>--}}
                                {{--<blockquote>--}}
                                    {{--<p>" A small river named Duden flows by their place and supplies it with the--}}
                                        {{--necessary regelialia.</p>--}}
                                {{--</blockquote>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="testimony text-center">--}}
                                {{--<span class="img-user" style="background-image: url(images/person2.jpg);"></span>--}}
                                {{--<span class="user">James Fisher</span>--}}
                                {{--<small>New York, USA</small>--}}
                                {{--<blockquote>--}}
                                    {{--<p>One day however a small line of blind text by the name of Lorem Ipsum decided to--}}
                                        {{--leave for the far World of Grammar.</p>--}}
                                {{--</blockquote>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="testimony text-center">--}}
                                {{--<span class="img-user" style="background-image: url(images/person3.jpg);"></span>--}}
                                {{--<span class="user">Jacob Webb</span>--}}
                                {{--<small>Athens, Greece</small>--}}
                                {{--<blockquote>--}}
                                    {{--<p>Alphabet Village and the subline of her own road, the Line Lane. Pityful a--}}
                                        {{--rethoric question ran over her cheek, then she continued her way.</p>--}}
                                {{--</blockquote>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection




