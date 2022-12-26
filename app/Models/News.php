<?php
namespace App\Models;
use App\Models\Categories;




class News
{
    public Categories $category;
    public array $news = [
        ['id' => 1,
        'categories_id' => 1,
        'title' => 'Новость первая',
        'inform' => 'Первая новость - хорошая новость про спорт',
        'isPrivate'=>false,
    ],
    
        ['id' => 2,
        'categories_id' => 1,
        'title' => 'Новость вторая',
        'inform' => 'Вторая новость - тоже хорошая новость, а вовсе не плохая, и тоже про спорт',
        'isPrivate'=>true
    ],
        ['id' => 3,
        'categories_id' => 1,
            'title' => 'Новость третья',
            'inform' => 'Третья новость - самая хорошая новость про спорт'
            , 'isPrivate'=>false
        ],   
        ['id' => 4,
        'categories_id' => 1,
            'title' => 'Новость третья',
            'inform' => 'Четвертая новость - наши баскетболисты пока не проиграли ни одной игры'
            , 'isPrivate'=>false
        ],
        ['id' => 5,
        'categories_id' => 2,
        'title' => 'Новость первая',
        'inform' => 'Первая новость - хорошая новость про культуру'
        , 'isPrivate'=>true
    ],
    
        ['id' => 6,
        'categories_id' => 2,
        'title' => 'Новость вторая',
        'inform' => 'Вторая новость - тоже хорошая новость, а вовсе не плохая, и тоже про культуру'
        , 'isPrivate'=>false],
        ['id' => 7,
        'categories_id' => 2,
            'title' => 'Новость третья',
            'inform' => 'Третья новость - самая хорошая новость про культуру'
            , 'isPrivate'=>false
        ],   
        ['id' => 8,
        'categories_id' => 2,
            'title' => 'Новость третья',
            'inform' => 'Четвертая новость - мы стали еще культурнее'
            , 'isPrivate'=>false
        ],   
        ['id' => 9,
        'categories_id' => 3,
        'title' => 'Новость первая',
        'inform' => 'Первая новость - хорошая новость про экономику'
        , 'isPrivate'=>true
    ],
    
        ['id' => 10,
        'categories_id' => 3,
        'title' => 'Новость вторая',
        'inform' => 'Вторая новость - тоже хорошая новость, а вовсе не плохая, и тоже про экономику',
         'isPrivate'=>false],
        ['id' => 11,
        'categories_id' => 3,
            'title' => 'Новость третья',
            'inform' => 'Третья новость - самая хорошая новость об экономике'
            , 'isPrivate'=>true
        ],   
        ['id' => 12,
        'categories_id' => 3,
            'title' => 'Новость третья',
            'inform' => 'Четвертая новость - экономика должна быть экономной'
            , 'isPrivate'=>false
        ],   
        ['id' => 13,
        'categories_id' => 4,
        'title' => 'Новость первая',
        'inform' => 'Первая новость - хорошая новость про страну'
        , 'isPrivate'=>false
    ],
    
        ['id' => 14,
        'categories_id' => 4,
        'title' => 'Новость вторая',
        'inform' => 'Вторая новость - тоже хорошая новость, а вовсе не плохая, и тоже про страну',
        'isPrivate'=>true],
        ['id' => 15,
        'categories_id' => 4,
            'title' => 'Новость третья',
            'inform' => 'Третья новость - самая хорошая новость про страну'
            , 'isPrivate'=>false
        ],   
        ['id' => 16,
        'categories_id' => 4,
            'title' => 'Новость третья',
            'inform' => 'Четвертая новость - наша страна- самая красивая'
            , 'isPrivate'=>false
        ],   
        ['id' => 17,
        'categories_id' => 5,
        'title' => 'Новость первая',
        'inform' => 'Первая новость - хорошая новость про мир'
        , 'isPrivate'=>false
    ],
    
        ['id' => 18,
        'categories_id' => 5,
        'title' => 'Новость вторая',
        'inform' => 'Вторая новость - тоже хорошая новость, а вовсе не плохая, и тоже про мир'
        , 'isPrivate'=>true],
        ['id' => 19,
        'categories_id' => 5,
            'title' => 'Новость третья',
            'inform' => 'Третья новость - самая хорошая новость про мир'
            , 'isPrivate'=>true
        ],   
        ['id' => 20,
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
        return $this->news;
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