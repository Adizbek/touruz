<?php

namespace App\Http\Controllers;

use App\City;
use App\Hotel;
use App\Monument;
use App\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $hotels = Hotel::limit(8)->latest()->get();
        $news = News::limit(3)->latest()->get();

        return view('main.index', compact('hotels', 'news'));
    }

    public function hotels()
    {
        $hotels = Hotel::latest()->paginate(6);
        return view('main.hotels', compact('hotels'));
    }

    public function hotelView($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('main.hotel_view', compact('hotel'));

    }

    public function monuments()
    {
        $monuments = Monument::latest()->paginate(6);
        return view('main.monuments', compact('monuments'));
    }

    public function monumentsView($id)
    {
        $monument = Monument::findOrFail($id);
        $random = Monument::inRandomOrder()->limit(6)->get();
        return view('main.monument_view', compact('monument', 'random'));
    }

    public function news(Request $request)
    {

        $news = News::latest()
            ->when(is_numeric($request->city) && $request->city > 0, function ($q) use ($request) {
                return $q->whereId($request->city);
            })
            ->paginate(4);


        $latest = News::latest()->limit(4)->get();

        return view('main.news', compact('news', 'latest'));
    }


    public function newsView($id)
    {
        $news = News::findOrFail($id);
        $latest = News::latest()->limit(4)->get();

        return view('main.news_view', compact('news', 'latest'));
    }

    public function item()
    {
        return view('main.item');
    }
}
