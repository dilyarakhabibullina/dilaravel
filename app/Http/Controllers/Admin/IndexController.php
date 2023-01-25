<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
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
       public function create(Request $request, Categories $categories, News $news) {
        if ($request->isMethod('post')) {
            $data = $news->getNews();
            
            $data[] = [
                'categories_id' => (int) $request->category,
                'title' => $request->title,
                'inform' => $request->text,
                'isPrivate' => isset($request->isPrivate)
            ];

        $id = array_key_last($data);
        $data[$id]['id'] = $id;
      //  dd($data);вот причина всех бед- после дампа ничего не выполняется
        Storage::disk('local')->put('news.json', json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
           
            
            return redirect()->route('admin.create')->with('success', 'Новость успешно добавлена!');
                               
        }


        return view('admin.create', ['cats' => $categories->getCategories()

        ]);
    }


}
