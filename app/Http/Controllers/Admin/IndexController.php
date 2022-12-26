<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;

class IndexController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function test1() {
        return response()->download('7.jpeg');
    }

        public function test2(News $news) {

            return response()->json($news->getNews())->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        
    }

    public function addNew() {
        return view('admin.addNew');
    }

    public function create(Request $request, Categories $categories) {
        if ($request->isMethod('post')) {
            //dump($request->all());
            $request->flash();
            return redirect()->route('admin.create');
        }


        return view('admin.create', ['cats' => $categories->getCategories()

        ]);
    }


}
