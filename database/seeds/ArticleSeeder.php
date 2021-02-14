<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'user_id' => 2,
            'category_id' => 1,
            'title' => 'Pantai Kuta',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dignissimos dolore dicta vel, minus provident aut quae quis ipsam voluptas hic, maiores iste quibusdam accusamus corporis sit inventore dolorem in.",
            'image' => "https://blog.tripcetera.com/id/wp-content/uploads/2020/03/greenglobe_90326256_302948407349111_4912417378280314522_n.jpg"
            ]);

        DB::table('articles')->insert([
            'user_id' => 2,
            'category_id' => 1,
            'title' => 'Pantai Pandawa',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dignissimos dolore dicta vel, minus provident aut quae quis ipsam voluptas hic, maiores iste quibusdam accusamus corporis sit inventore dolorem in.",
            'image' => "https://blog.airpaz.com/wp-content/uploads/Pantai-Pandawa.jpg"
            ]);

        DB::table('articles')->insert([
            'user_id' => 2,
            'category_id' => 2,
            'title' => 'Gunung Lawu',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dignissimos dolore dicta vel, minus provident aut quae quis ipsam voluptas hic, maiores iste quibusdam accusamus corporis sit inventore dolorem in.",
            'image' => "https://statik.tempo.co/data/2019/08/17/id_864852/864852_720.jpg"
            ]);
        
        DB::table('articles')->insert([
            'user_id' => 3,
            'category_id' => 1,
            'title' => 'Pantai Sanur',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dignissimos dolore dicta vel, minus provident aut quae quis ipsam voluptas hic, maiores iste quibusdam accusamus corporis sit inventore dolorem in.",
            'image' => "https://www.anekawisata.com/wp-content/uploads/2015/09/Pantai-Sanur.jpg"
            ]);
        
        DB::table('articles')->insert([
            'user_id' => 3,
            'category_id' => 2,
            'title' => 'Gunung Prau',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dignissimos dolore dicta vel, minus provident aut quae quis ipsam voluptas hic, maiores iste quibusdam accusamus corporis sit inventore dolorem in.",
            'image' => "https://genpi.id/wp-content/uploads/2020/08/WhatsApp-Image-2020-08-23-at-6.17.05-PM.jpeg"
        ]);
        
        DB::table('articles')->insert([
            'user_id' => 3,
            'category_id' => 2,
            'title' => 'Gunung Rinjani',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dignissimos dolore dicta vel, minus provident aut quae quis ipsam voluptas hic, maiores iste quibusdam accusamus corporis sit inventore dolorem in.",
            'image' => "https://statik.tempo.co/data/2018/11/26/id_799732/799732_720.jpg"
        ]);
    }
}
