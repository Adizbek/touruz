<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $hotels = Hotel::limit(8)->get();
        $news = News::limit(3)->get();

        return view('main.index', compact('hotels', 'news'));
    }

    public function hotels()
    {
        $hotels = Hotel::paginate(4);
        return view('main.hotels', compact('hotels'));
    }

    public function monuments()
    {
        return view('main.monuments');
    }
}
