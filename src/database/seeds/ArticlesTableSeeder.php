<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('articles')->insert([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
