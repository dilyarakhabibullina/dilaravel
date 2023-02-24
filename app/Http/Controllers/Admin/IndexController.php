<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Models\Categories;
use App\Models\News;
use Illuminate\Support\Facades\DB;

//use App\Http\Controllers\Controller;
use App\Models\Category;
//use App\Models\News;
//use Illuminate\Http\Request;

class IndexController extends Controller
{
    // public function index() {
    //     return view('admin.index');
    // }

    public function test1() {
        return response()->download('7.jpeg');
    }

        public function test2(News $news) {

            return response()->json($news->getNews())->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        
    }
    //    public function create(Request $request, Categories $categories, News $news) {
    //     if ($request->isMethod('post')) {
            
            
    //         $data = [
    //             'categories_id' => (int) $request->category,
    //             'title' => $request->title,
    //             'inform' => $request->text,
    //             'isPrivate' => isset($request->isPrivate)
    //         ];

    //         DB::table('news')->insert($data);

    //       //  $data2 = $request->all();

    //        // dump($data);
    //        // dd($data2);

    //     //$id = array_key_last($data);
    //    // $data[$id]['id'] = $id;
    //   //  dd($data);вот причина всех бед- после дампа ничего не выполняется
    //  //  Storage::disk('local')->put('news.json', json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
           
            
    //         return redirect()->route('admin.create')->with('success', 'Новость успешно добавлена!');
                               
    //     }


    //     return view('admin.create', ['cats' => $categories->getCategories()

    //     ]);
    // }

    public function create(Request $request, Category $category, News $news) {
        if ($request->isMethod('post')) {
            
            
            // $data = [
            //     'categories_id' => (int) $request->category,
            //     'title' => $request->title,
            //     'inform' => $request->text,
            //     'isPrivate' => isset($request->isPrivate)
            // ];

          //  DB::table('news')->insert($data);

           // $news->title = $request->title;

            $data = $request->except('_token');
          // 
            $news->fill($data);
            // dump($data);
            // dd($news);
            $news->save();
           // $id = $news->id;
            
            return redirect()->route('admin.create')->with('success', 'Новость успешно добавлена!');
                               
        }


        return view('admin.create', [
            'news' => $news,
            'cats' => Category::all()
        ]);
    }





}
