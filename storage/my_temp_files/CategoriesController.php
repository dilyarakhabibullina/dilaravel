<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
   
    public function index() {
      // $categories= DB::table('categories')->get();
       return view('categories')->with('categories', Category::all());
    }

    public function show($id) {

        $category = Category::query()->where('id', $id)->first();  
    //    $news = DB::table('news')->leftJoin('categories', 'news.categories_id', '=', 'categories.id')
    //    ->select('news.id', 'news.categories_id', 'title', 'inform', 'isPrivate', 
    //    'categories', 'slug')->where('categories_id', $id)->get();
      
      
    //dd($category);  

        $news = News::query()->where('categories_id', $category->id)->paginate(3);
    dump($news);
   // $news = News::query()->paginate(3);
    return view('news.index')->with('news', $news);
        
    }

    public function showBySlug($slug) {
      
      //$news = DB::table('news')->leftJoin('categories', 'news.categories_id', 'categories.id')->where('slug', $slug)->get();
        $category = Category::query()->where('slug', $slug)->first();
     //   $news = News::query()->where('categories_id', $category->id)->get()->paginate(3);
      $news = News::query()->where('categories_id', $category->id)->paginate(3);
        return view('news.index')->with('news', $news)->with('categories', $category);
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
