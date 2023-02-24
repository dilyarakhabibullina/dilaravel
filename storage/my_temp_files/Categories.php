<?php
namespace App\Models;

use App\Models\News;

class Categories
{
    public static $categories = [
        ['id' => 1,
        'category' => 'Sport',
        'slug' => 'sport'
        ],
    
        ['id' => 2,
        'category' => 'Cult',
        'slug'=>'culture'],

        ['id' => 3,
        'category' => 'Economy',
        'slug'=>'economy']
        ,   
        ['id' => 4,
        'category' => 'Country',
        'slug'=>'country'],
        ['id' => 5,
        'category' => 'World',
        'slug'=>'world']
         ];

    public static function getCategories() {
        return static::$categories;
       // dump($categories);
    }

    // public static function getNewsByCategories($id) {
    //     foreach (News::getNews() as $news) {
    //         if ($news['categories_id'] == '2') {
    //             return $news;
    //             dump($news);
    //         }
    //     }
    //     return null;
    // }


    // public static function getNewsByCategories($id) {
    //     foreach (News::$news as $new) {
    //         if ($new['categories_id'] == $id) {
    //             $news[] =$new;
    //             }
    //         }dump($news);
    //         //$arr= $news;
    //         return $news;
    // }
    
    // public static function getNewsByCategories($id) {
    //     //$this->getCategories();
    //     foreach (News::$news as $new) {
    //         if ($new['categories_id'] == $id) {
    //             $news[] =$new;
    //             }
    //         }
    //         dump($news);
    //         //$arr= $news;
    //         return $news;
    // }

    // public static function getCategoryIdBySlug($slug) {
    //     //$this->getCategories();
    //     foreach (News::$news as $new) {
    //         if ($new['categories_id'] == $id) {
    //             $news[] =$new;
    //             }
    //         }
    //         dump($news);
    //         //$arr= $news;
    //         return $news;
    // }

    public static function getCategoryIdBySlug($slug)
    {
        $id = null;
        foreach (static::getCategories() as $category) {
            if ($category['slug'] == $slug) {
                $id = $category['id'];
                break;
            }
        }
        return $id;
    }

    
   
    
}