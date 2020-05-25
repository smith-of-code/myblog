<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert($this->getData());
    }

    private function getData()
    {
        $faker = Faker\Factory::create('ru_RU');

    $data = [];
    for ($i = 0; $i < 10; $i++){
        $data[] = [
          'name' =>   $faker->jobTitle,
            'is_private' => (boolean)rand(0, 1),
        ];
    }
    return $data;
    }
}
