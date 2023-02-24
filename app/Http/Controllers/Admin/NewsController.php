<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;



class NewsController extends Controller
{
     public function index() {
        $news=News::query()->paginate(5);

        return view('admin.index')->with('news', $news);
    }

    
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


    public function store(News $news){

    }

    public function edit(News $news, Category $category){
        // if ($request->isMethod('post')){
        
        // }
        return view('admin.update', [
            'news' => $news,
            'cats' => Category::all()
        ]);

    }


    public function update(Request $request, News $news){
        //dd($news);
    //$news->fill($request->except("_token"));
       // dd($request);
    
        $news->fill([
            'id'=>$request->id, 
            'categories_id'=>$request->categories_id,
            'title'=>$request->title, 
            'inform'=>$request->inform,
            'isPrivate'=>$request->isPivate
    ]);
   //  dd($news);
   // $news->fill($news); 
   

       $news->isPrivate = isset($request->isPrivate);
       $news->save();
//dd($news);
        return redirect()->route('admin.index')->with('success', 'Новость изменена успешно!');




        
    }
   public function destroy(News $news) {
        $news->delete();
        return redirect()->route('admin.index')->with('success', 'Новость удалена успешно!');

   }
   
}
