<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
           ['name'=>'آذربایجان شرقی',
            'slug'=>'east-azarbaijan'],
            ['name'=>'آذربایجان غربی',
            'slug'=>'west-azarbaijan'],
            ['name'=>'اردبیل',
            'slug'=>'ardabil'],
            ['name'=>'اصفهان',
            'slug'=>'esfahan'],
            ['name'=>'البرز',
            'slug'=>'alborz'],
            ['name'=>'ایلام',
            'slug'=>'ilam'],
            ['name'=>'بوشهر',
            'slug'=>'bushehr'],
            ['name'=>'تهران',
            'slug'=>'tehran'],
            ['name'=>'فارس',
            'slug'=>'fars'],
            ['name'=>'قزوین',
            'slug'=>'qazvin'],
            ['name'=>'قم',
            'slug'=>'qom'],
            ['name'=>'یزد',
            'slug'=>'yazd'],
            ['name'=>'هرمزگان',
            'slug'=>'hormozgan'],
        ];

        foreach($states as $state){
            \App\Models\State::updateOrCreate(
                ['slug'=>$state['slug']], $state);
        }
    }
}
