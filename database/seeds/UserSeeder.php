<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
            'name' => 'admin',
            'email'=> 'www@www.ww',
            'password'=> Hash::make('12345678'),
            'is_admin'=> true,
        ]

        );
    }
}
