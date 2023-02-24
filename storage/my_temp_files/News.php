<?php
namespace App\Models;
use App\Models\Categories;
use Illuminate\Support\Facades\Storage;




class News
{
    public Categories $category;
    public array $news = [
        1 => ['id' => 1,
        'categories_id' => 1,
        'title' => 'Новость первая',
        'inform' => 'Первая новость - хорошая новость про спорт',
        'isPrivate'=>false,
    ],
    
       2 => ['id' => 2,
        'categories_id' => 1,
        'title' => 'Новость вторая',
        'inform' => 'Вторая новость - тоже хорошая новость, а вовсе не плохая, и тоже про спорт',
        'isPrivate'=>true
    ],
        3 => ['id' => 3,
        'categories_id' => 1,
            'title' => 'Новость третья',
            'inform' => 'Третья новость - самая хорошая новость про спорт'
            , 'isPrivate'=>false
        ],   
        4 =>['id' => 4,
        'categories_id' => 1,
            'title' => 'Новость третья',
            'inform' => 'Четвертая новость - наши баскетболисты пока не проиграли ни одной игры'
            , 'isPrivate'=>false
        ],
        5 =>['id' => 5,
        'categories_id' => 2,
        'title' => 'Новость первая',
        'inform' => 'Первая новость - хорошая новость про культуру'
        , 'isPrivate'=>true
    ],
    
       6 => ['id' => 6,
        'categories_id' => 2,
        'title' => 'Новость вторая',
        'inform' => 'Вторая новость - тоже хорошая новость, а вовсе не плохая, и тоже про культуру'
        , 'isPrivate'=>false],
        7 => ['id' => 7,
        'categories_id' => 2,
            'title' => 'Новость третья',
            'inform' => 'Третья новость - самая хорошая новость про культуру'
            , 'isPrivate'=>false
        ],   
        8 => ['id' => 8,
        'categories_id' => 2,
            'title' => 'Новость третья',
            'inform' => 'Четвертая новость - мы стали еще культурнее'
            , 'isPrivate'=>false
        ],   
        9 =>['id' => 9,
        'categories_id' => 3,
        'title' => 'Новость первая',
        'inform' => 'Первая новость - хорошая новость про экономику'
        , 'isPrivate'=>true
    ],
    
    10 => ['id' => 10,
        'categories_id' => 3,
        'title' => 'Новость вторая',
        'inform' => 'Вторая новость - тоже хорошая новость, а вовсе не плохая, и тоже про экономику',
         'isPrivate'=>false],
         11 => ['id' => 11,
        'categories_id' => 3,
            'title' => 'Новость третья',
            'inform' => 'Третья новость - самая хорошая новость об экономике'
            , 'isPrivate'=>true
        ],   
        12 => ['id' => 12,
        'categories_id' => 5,
            'title' => 'Новость третья',
            'inform' => 'Четвертая новость - оформляйте карту МИР'
            , 'isPrivate'=>true
        ]
        
    ];

    // public function __construct(Categories $category)
    // {
    //     $this->category = $category;
    // }

   public function getNews() {
 return json_decode(Storage::disk('local')->get('news.json'), true);
 //return $this->news;

 // return json_decode(Storage::disk('local')->get('news.json') , true);
    }

    public function getNewsById($id) {
        foreach ($this->getNews() as $news) {
            if ($news['id'] == $id) {
                return $news;
            }
        }
        return null;
    }

    public function getNewsByCategories($id) {
        //$this->getCategories();
        foreach ($this->news as $new) {
            if ($new['categories_id'] == $id) {
                $news[] =$new;
                }
            }
            dump($news);
            //$arr= $news;
            return $news;
    }


    public function getNewsByCategorySlug($slug): array
    {
        $category_id = Categories::getCategoryIdBySlug($slug);
        $news = [];
        foreach ($this->getNews() as $item) {
            if ($item['categories_id'] == $category_id) {
                $news[] = $item;
            }
        }
        return $news;
    }

    public function getNewsByCategoryIdSlug($slug, $id): array
    {
        $category_id = Categories::getCategoryIdBySlug($slug);
        $news = [];
        foreach ($this->getNews() as $item) {
            if ($item['categories_id'] == $category_id && $item['id'] == $id) {
                $news[] = $item;
            }
        }
        return $news;
    }


       
}