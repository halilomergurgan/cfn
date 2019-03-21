<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();
        $data = [
            [
                'title_tr' => $faker->text(200),
                'title_eng' => $faker->text(200),
                'description_tr' => $faker->paragraph,
                'description_en' => $faker->paragraph,
            ],
            [
                'title_tr' => $faker->text(200),
                'title_eng' => $faker->text(200),
                'description_tr' => $faker->paragraph,
                'description_en' => $faker->paragraph,
            ],
            [
                'title_tr' => $faker->text(200),
                'title_eng' => $faker->text(200),
                'description_tr' => $faker->paragraph,
                'description_en' => $faker->paragraph,
            ]
        ];

        $data_announcement = [
            [
                'title_tr' => $faker->text(200),
                'title_eng' => $faker->text(200),
                'description_tr' => $faker->paragraph,
                'description_en' => $faker->paragraph,
            ]
        ];

        DB::table('news')->insert($data);
        DB::table('announcement')->insert($data_announcement);
    }
}
