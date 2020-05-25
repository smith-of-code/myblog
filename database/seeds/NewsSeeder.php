<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData()
    {
        $faker = Faker\Factory::create('ru_RU');

        $data = [];
        for ($i = 0; $i < 20; $i++){
            $data[] = [

                'category_id' =>   rand(1, 10),
                'title' => $faker->sentence(rand(1, 3)),
                'desc' => $faker->realText(50),
                 'content'=> $faker->realText(rand(100, 200)),
                'image'=> 'https://loremflickr.com/300/70?lock='. rand(1, 40000),
                'is_private' => (boolean)rand(0, 1),
                'published' => (boolean)rand(0, 1)
            ];
        }
        return $data;
    }
}
