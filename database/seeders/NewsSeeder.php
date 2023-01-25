<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * public function run()
    
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData(){
        $data = [];
        $faker = Faker\Factory::create('ru_RU');
        for ($i = 0; $i < 7; $i++) { 
             $data[] = [
            'categories_id'=> rand(1, 5),
            'title' => $faker->realText(10),
            'inform' => $faker->realText(500),
            'isPrivate' => rand(1, 0)
        ]; 
    }
        return $data; 

    }
}
