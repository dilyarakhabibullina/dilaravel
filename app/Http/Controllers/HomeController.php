<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\News;
use App\Models\Categories;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
   //   $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }


    public function index(Request $request) {
        if ($request->isMethod('post')) {
            $request->flash();
            
            return 
            dump($request->all());
           //redirect()->route('home');
           
        }

        // $collection = collect([1, 2, 3]);
        // dd($collection->min());
        return view('home');
    }

    // public function saveNews () {
    //     $news = DB::()
    //     // Storage::disk('local')->put('news.json', json_encode($news->getNews(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    // }
    // public function saveCats (Categories $cats) {
    //     Storage::disk('local')->put('cats.json', json_encode($cats->getCategories(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    // }
}
