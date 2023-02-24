<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
class NewsController extends Controller
{
    public function index() {
     //    dd(News::all()); 
// $news = DB::table('news')->get()->keyBy('id');
// dd($news);

     $news = News::query()->paginate(3);

     return view('news.index')->with('news', $news);
    }

    public function show(News $news) {
        // $news = DB::table('news')->find($id);
       // $news = News::query()->find($id);
        return view('news.one')->with('news', $news);
    }

}

