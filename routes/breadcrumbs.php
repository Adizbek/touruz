<?php

// Home
Breadcrumbs::for ('home', function ($trail) {
    $trail->push('Главная', route('home'));
});

// Home > Hotels
Breadcrumbs::for ('hotels', function ($trail) {
    $trail->parent('home');
    $trail->push('Отели', route('hotels'));
});


// Home > Hotels > [HOTEL]
Breadcrumbs::for ('hotel.view', function ($trail, $hotel) {
    $trail->parent('hotels');
    $trail->push($hotel->name, route('hotels'));
});


// Home > News
Breadcrumbs::for ('news', function ($trail) {
    $trail->parent('home');
    $trail->push('Новости', route('news'));
});


// Home > News > [HOTEL]
Breadcrumbs::for ('news.view', function ($trail, $news) {
    $trail->parent('news');
    $trail->push($news->title, route('news'));
});

// Home > Monument
Breadcrumbs::for ('monuments', function ($trail) {
    $trail->parent('home');
    $trail->push('Памятники', route('monuments'));
});


// Home > Monuments > [Monuments]
Breadcrumbs::for ('monument.view', function ($trail, $m) {
    $trail->parent('monuments');
    $trail->push($m->name, route('monuments'));
});
