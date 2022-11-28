<?php
namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = [];
        return view('news.index')->with('news', News::getNews());
    }

    public function show($id) {
        return view('news.one')->with('news', News::getNewsById($id));
    }

}

