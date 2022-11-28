<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    
    public function index() {
        $categories = [];
        return view('categories')->with('categories', Categories::getcategories());
    }

    public function show($id) {
        return view('news.index')->with('news', News::getNewsByCategories($id));
    }

    public function showBySlug($slug) {
        return view('news.index')->with('news', News::getNewsByCategorySlug($slug));
    }

    public function showBySlugId($slug, $id) {
        return view('news.index')->with('news', News::getNewsByCategoryIdSlug($slug, $id));
    }

    

}
