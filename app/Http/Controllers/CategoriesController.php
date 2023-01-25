<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
   
    public function index() {
       $categories= DB::table('categories')->get();
       return view('categories')->with('categories', $categories);
    }

    public function show($id) {
        
       $news = DB::table('news')->leftJoin('categories', 'news.categories_id', '=', 'categories.id')
       ->select('news.id', 'news.categories_id', 'title', 'inform', 'isPrivate', 
       'categories', 'slug')->where('categories_id', $id)->get();
      dump($news);
         
      //  $news = DB::table('categories')->where('id','=', $id)->get('id');
         
        // get();
        //$categories = DB::table('categories')->where('id','=', $id)->get('id');
        //dd($categories);
        //$filteredNews=
        return view('news.index')->with('news', $news);
        //->with('categories', $categories);
    }

    public function showBySlug($slug) {

       //$news1 = DB::select('SELECT * FROM news LEFT JOIN categories ON news.categories_id = categories.id WHERE $slug=slug');
      $news = DB::table('news')->leftJoin('categories', 'news.categories_id', 'categories.id')->where('slug', $slug)->get();
       //dd($news);
        // $news = DB::table('news')->get();
        // $category_id = DB::select('SELECT id FROM categories WHERE $slug=slug');
       // dd($news);
       // $news = DB::select('SELECT * FROM news WHERE $categories_id=$category_id');
                  
       
       
        return view('news.index')->with('news', $news);
    }

    // {
    //     $category_id = Categories::getCategoryIdBySlug($slug);
    //     $news = [];
    //     foreach ($this->getNews() as $item) {
    //         if ($item['categories_id'] == $category_id) {
    //             $news[] = $item;
    //         }
    //     }
    //     return $news;
    // }


    public function showBySlugId(News $news, $slug, $id) {
        return view('news.index')->with('news', $news->getNewsByCategoryIdSlug($slug, $id));
    }

    

}
