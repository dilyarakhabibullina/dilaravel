<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         DB::table('news')->upsert(
//  [
//     //['id'=>12,
// // 'images'=>'mountains'],
// // ['id'=>29,
// // 'images'=>'mountains'],
// ['id'=>48,
// 'images'=>'mountains']
//         ], ['id'], ['images'])

// ;
        
//     }
// }
DB::table('news')->update(['images' => 'forest.jpeg']);
DB::table('news')->where('id', 17)->update(['images' => 'river.jpeg']);
DB::table('news')->where('id', 30)->update(['images' => 'sky.jpeg']);
DB::table('news')->where('id', 6)->update(['images' => 'mountains.jpeg']);

    }}
   
    // [
    //     'images' => 'images/river.jpeg',
    //     'inform' => 'dream was painful'
    // ],
    // [
    //     'images' => 'images/sky.jpeg',
    //     'inform' => 'why doesnt work'
    // ]


    //  DB::table('posts')->insert([
    //     [
    //         'title' => 'title 1',
    //         'slug'  => 'post-1',
    //         'text'  => 'text text text 1',
    //     ],
    //     [
    //         'title' => 'title 2',
    //         'slug'  => 'post-2',
    //         'text'  => 'text text text 2',
    //     ],
    //     [
    //         'title' => 'title 3',
    //         'slug'  => 'post-3',
    //         'text'  => 'text text text 3',
    //     ],
   

    //  [
    //     'images' => "images/forest.jpeg"
    // ],
    // [
    //     'images' => 'images/river.jpeg'
    // ],
    // [
    //     'images' => 'images/sky.jpeg'
    // ],
    //  [
    //     'images' => 'images/mountains.jpeg'
    //  ],
    //  [
    //     'images' => 'images/sky.jpeg'
    // ],
    //  [
    //     'images' => 'images/mountains.jpeg'
    //  ]

    // [
    //     'images' => 'images/forest.jpeg'
    // ],
    // [
    //     'images' => 'images/forest.jpeg'
    // ],
    // [
    //     'images' => 'images/forest.jpeg'
    // ],
    // [
    //     'images' => 'images/forest.jpeg'
    // ],
    // [
    //     'images' => 'images/forest.jpeg'
    // ],
    // [
    //     'images' => 'images/forest.jpeg'
    // ]
    

       
  // }

