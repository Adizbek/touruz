<?php

namespace App\Http\Controllers;

use App\City;
use App\Hotel;
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

    public function monuments()
    {
        return view('main.monuments');
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



    public function item()
    {
        return view('main.item');
    }
}
