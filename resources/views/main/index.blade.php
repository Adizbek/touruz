@extends('main.layout')

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
                <a href="#" class="tour-entry animate-box">
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
                    <p>Удивительно, что количество новостей, которые происходят в Узбекистане каждый день, всегда точно соответствует нашему сайту.</p>
                </div>
            </div>
            <div class="blog-flex">
                <div class="f-entry-img" style="background-image: url(images/uzb-15.jpg);">
                </div>
                <div class="blog-entry aside-stretch-right">
                    <div class="row">
                        @foreach($news as $ne)
                            <div class="col-md-12 animate-box">
                                <a href="blog.html" class="blog-post">
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
                            <div class="text-lefts">
                                <div class="sale-box">
                                    <div class="sale-box-top">
                                        <h2 class="number">45</h2>
                                        <span class="sup-1">%</span>
                                        <span class="sup-2">Off</span>
                                    </div>
                                    <h2 class="text-sale">Sale</h2>
                                </div>
                            </div>
                            <div class="text-rights">
                                <h3 class="title">Just hurry up limited offer!</h3>
                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                                    language ocean.</p>
                                <p><a href="#" class="btn btn-primary">Book Now</a> <a href="#"
                                                                                       class="btn btn-primary btn-outline">Read
                                        more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="video-wrap">
                        <div class="video colorlib-video" style="background-image: url(https://i.ytimg.com/vi/GNqZaPM5NeU/maxresdefault.jpg);">
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
                    <h2>Recommended Hotels</h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box">
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="hotel-entry">
                                <a href="hotels.html" class="hotel-img"
                                   style="background-image: url(images/hotel-1.jpg);">
                                    <p class="price"><span>$120</span>
                                        <small> /night</small>
                                    </p>
                                </a>
                                <div class="desc">
                                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i></span> 545 Reviews</p>
                                    <h3><a href="#">Hotel Edison</a></h3>
                                    <span class="place">New York, USA</span>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hotel-entry">
                                <a href="hotels.html" class="hotel-img"
                                   style="background-image: url(images/hotel-2.jpg);">
                                    <p class="price"><span>$120</span>
                                        <small> /night</small>
                                    </p>
                                </a>
                                <div class="desc">
                                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i></span> 545 Reviews</p>
                                    <h3><a href="#">Hotel Edison</a></h3>
                                    <span class="place">New York, USA</span>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hotel-entry">
                                <a href="hotels.html" class="hotel-img"
                                   style="background-image: url(images/hotel-3.jpg);">
                                    <p class="price"><span>$120</span>
                                        <small> /night</small>
                                    </p>
                                </a>
                                <div class="desc">
                                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i></span> 545 Reviews</p>
                                    <h3><a href="#">Hotel Edison</a></h3>
                                    <span class="place">New York, USA</span>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hotel-entry">
                                <a href="hotels.html" class="hotel-img"
                                   style="background-image: url(images/hotel-4.jpg);">
                                    <p class="price"><span>$120</span>
                                        <small> /night</small>
                                    </p>
                                </a>
                                <div class="desc">
                                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i></span> 545 Reviews</p>
                                    <h3><a href="#">Hotel Edison</a></h3>
                                    <span class="place">New York, USA</span>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-testimony" class="colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Удовлетворенный путешественник в Узбекистан рассказывает:</h2>
                    <p>Наша природа заключается в движении; полное спокойствие - это смерть.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 animate-box">
                    <div class="owl-carousel2">
                        <div class="item">
                            <div class="testimony text-center">
                                <span class="img-user" style="background-image: url(images/person1.jpg);"></span>
                                <span class="user">Alysha Myers</span>
                                <small>Miami Florida, USA</small>
                                <blockquote>
                                    <p>" A small river named Duden flows by their place and supplies it with the
                                        necessary regelialia.</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony text-center">
                                <span class="img-user" style="background-image: url(images/person2.jpg);"></span>
                                <span class="user">James Fisher</span>
                                <small>New York, USA</small>
                                <blockquote>
                                    <p>One day however a small line of blind text by the name of Lorem Ipsum decided to
                                        leave for the far World of Grammar.</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony text-center">
                                <span class="img-user" style="background-image: url(images/person3.jpg);"></span>
                                <span class="user">Jacob Webb</span>
                                <small>Athens, Greece</small>
                                <blockquote>
                                    <p>Alphabet Village and the subline of her own road, the Line Lane. Pityful a
                                        rethoric question ran over her cheek, then she continued her way.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-tour">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Most Popular Travel Countries</h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="f-tour">
                        <div class="row row-pb-md">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 animate-box">
                                        <a href="tours.html" class="f-tour-img"
                                           style="background-image: url(images/tour-1.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span>
                                                    <small>/ person</small>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <a href="tours.html" class="f-tour-img"
                                           style="background-image: url(images/tour-2.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span>
                                                    <small>/ person</small>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <a href="tours.html" class="f-tour-img"
                                           style="background-image: url(images/tour-3.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span>
                                                    <small>/ person</small>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <a href="tours.html" class="f-tour-img"
                                           style="background-image: url(images/tour-4.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span>
                                                    <small>/ person</small>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="desc">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Italy, Europe</h3>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia
                                                and Consonantia, there live the blind texts. Separated they live in
                                                Bookmarksgrove right at the coast of the Semantics, a large language
                                                ocean. A small river named Duden flows by their place and supplies it
                                                with the necessary regelialia.</p><br>
                                        </div>
                                        <div class="col-md-12">
                                            <h4>Best Tours City</h4>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li><a href="#">Rome</a></li>
                                                        <li><a href="#">Milan</a></li>
                                                        <li><a href="#">Genoa</a></li>
                                                        <li><a href="#">Verona</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li><a href="#">Venice</a></li>
                                                        <li><a href="#">Bologna</a></li>
                                                        <li><a href="#">Trieste</a></li>
                                                        <li><a href="#">Florence</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li><a href="#">Palermo</a></li>
                                                        <li><a href="#">Siena</a></li>
                                                        <li><a href="#">San Marino</a></li>
                                                        <li><a href="#">Naples</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p><a href="tours.html" class="btn btn-primary">View All Places</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-tour">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6">
                                <div class="row">
                                    <div class="col-md-6 animate-box">
                                        <a href="tours.html" class="f-tour-img"
                                           style="background-image: url(images/tour-5.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span>
                                                    <small>/ person</small>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <a href="tours.html" class="f-tour-img"
                                           style="background-image: url(images/tour-6.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span>
                                                    <small>/ person</small>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <a href="tours.html" class="f-tour-img"
                                           style="background-image: url(images/tour-7.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span>
                                                    <small>/ person</small>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <a href="tours.html" class="f-tour-img"
                                           style="background-image: url(images/tour-8.jpg);">
                                            <div class="desc">
                                                <h3>Rome - 5 Days</h3>
                                                <p class="price"><span>$120</span>
                                                    <small>/ person</small>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box col-md-pull-6 text-right">
                                <div class="desc">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Athens, Greece</h3>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia
                                                and Consonantia, there live the blind texts. Separated they live in
                                                Bookmarksgrove right at the coast of the Semantics, a large language
                                                ocean. A small river named Duden flows by their place and supplies it
                                                with the necessary regelialia.</p><br>
                                        </div>
                                        <div class="col-md-12">
                                            <h4>Best Tours City</h4>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li><a href="#">Rome</a></li>
                                                        <li><a href="#">Milan</a></li>
                                                        <li><a href="#">Genoa</a></li>
                                                        <li><a href="#">Verona</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li><a href="#">Venice</a></li>
                                                        <li><a href="#">Bologna</a></li>
                                                        <li><a href="#">Trieste</a></li>
                                                        <li><a href="#">Florence</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                    <ul>
                                                        <li><a href="#">Palermo</a></li>
                                                        <li><a href="#">Siena</a></li>
                                                        <li><a href="#">San Marino</a></li>
                                                        <li><a href="#">Naples</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p><a href="tours.html" class="btn btn-primary">View All Places</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




