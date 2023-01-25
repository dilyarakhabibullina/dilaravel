<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getCategoriesData());
    }

    private function getCategoriesData() {
        $categoriesData = [
            [
              
            
            'categories' => 'Sport',
            'slug' => 'sport'
            ],
        
            [
           
            'categories' => 'Cult',
            'slug'=>'culture'],
    
            [
            
            'categories' => 'Economy',
            'slug'=>'economy']
            ,   
            [
           
            'categories' => 'Country',
            'slug'=>'country'],
            [
            
            'categories' => 'World',
            'slug'=>'world']
             ];
    
        


        // $faker = Faker\Factory::create('ru_RU');
        // $categoriesData[]=[
        //     'categories' => $faker->realText(10),
        //     'slug' => $faker->realText(10)];

        return $categoriesData;
    }
}
