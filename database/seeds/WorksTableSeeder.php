<?php

use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            'title'         => 'Утро невесты. Юлия',
            'category_id'   => '1',
            'link'          => 'https://youtu.be/8kq0qugA6lA',
            'description'   => 'Утро невесты,красивое свадебное видео, отличный свадебный клип.',
        ]);
        DB::table('works')->insert([
            'title'         => 'Лучшее свадебное видео. Утро жениха и невесты. Владимир и Анастасия',
            'category_id'   => '1',
            'link'          => 'https://youtu.be/il3e5LPAOV4',
            'description'   => 'http://avt-video.ru/ Лучшее свадебное видео. Утро жениха и невесты. Красивый свадебный клип.',
        ]);
        DB::table('works')->insert([
            'title'         => 'Выпускной клип. Школа №6, г. Туапсе',
            'category_id'   => '3',
            'link'          => 'https://youtu.be/udxQ6qsvHdc',
            'description'   => 'Выпускной клип. Школа №6, г. Туапсе',
        ]);
    }
}
