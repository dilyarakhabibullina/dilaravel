<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    
    public function index(Categories $categories) {
      //  $categories = [];
        return view('categories')->with('categories', $categories->getcategories());
    }

    public function show(News $news, $id) {
        return view('news.index')->with('news', $news->getNewsByCategories($id));
    }

    public function showBySlug(News $news, $slug) {
        return view('news.index')->with('news', $news->getNewsByCategorySlug($slug));
    }

    public function showBySlugId(News $news, $slug, $id) {
        return view('news.index')->with('news', $news->getNewsByCategoryIdSlug($slug, $id));
    }

    

}
