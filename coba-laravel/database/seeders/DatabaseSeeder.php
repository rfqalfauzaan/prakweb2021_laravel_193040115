<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use PDO;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
   
        User::create([
            'name' =>'Rifqi Al Fauzaan',
            'email' => 'alfauzaan.rifqi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' =>' Fauzaan',
            'email' => 'fauzaani@gmail.com',
            'password' => bcrypt('12345')
        ]);
        Category::create([
            'name'=> 'Web Programing',
            'slug'=> 'web Programing'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug'=> 'judul-pertama',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore. 
            Repellat iure sunt molestias architecto, vel ad eum, voluptatum, deleniti aliquid illum nam ex similique molestiae explicabo
            fuga nemo laborum provident minima reiciendis? Voluptatem earum, minus dolor possimus animi dignissimos 
            temporibus nihil modi facere rerum consectetur hic eius unde voluptatum reprehenderit itaque consequatur.
            Commodi ut suscipit dolor aliquam corrupti velit ducimus excepturi quisquam, numquam eos iste in maiores architecto reprehenderit, 
            tenetur atque voluptas soluta ea facere pariatur debitis dolorem non quae.',
            'category_id' => 1,
            'user_id' =>1
        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'slug'=> 'judul-ke-dua',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore. 
            Repellat iure sunt molestias architecto, vel ad eum, voluptatum, deleniti aliquid illum nam ex similique molestiae explicabo
            fuga nemo laborum provident minima reiciendis? Voluptatem earum, minus dolor possimus animi dignissimos 
            temporibus nihil modi facere rerum consectetur hic eius unde voluptatum reprehenderit itaque consequatur.
            Commodi ut suscipit dolor aliquam corrupti velit ducimus excepturi quisquam, numquam eos iste in maiores architecto reprehenderit, 
            tenetur atque voluptas soluta ea facere pariatur debitis dolorem non quae.',
            'category_id' => 1,
            'user_id' =>1
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'slug'=> 'judul-ke-tiga',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore. 
            Repellat iure sunt molestias architecto, vel ad eum, voluptatum, deleniti aliquid illum nam ex similique molestiae explicabo
            fuga nemo laborum provident minima reiciendis? Voluptatem earum, minus dolor possimus animi dignissimos 
            temporibus nihil modi facere rerum consectetur hic eius unde voluptatum reprehenderit itaque consequatur.
            Commodi ut suscipit dolor aliquam corrupti velit ducimus excepturi quisquam, numquam eos iste in maiores architecto reprehenderit, 
            tenetur atque voluptas soluta ea facere pariatur debitis dolorem non quae.',
            'category_id' => 2,
            'user_id' =>1
        ]);
        Post::create([
            'title' => 'Judul Ke Empat',
            'slug'=> 'judul-ke-empat',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore. 
            Repellat iure sunt molestias architecto, vel ad eum, voluptatum, deleniti aliquid illum nam ex similique molestiae explicabo
            fuga nemo laborum provident minima reiciendis? Voluptatem earum, minus dolor possimus animi dignissimos 
            temporibus nihil modi facere rerum consectetur hic eius unde voluptatum reprehenderit itaque consequatur.
            Commodi ut suscipit dolor aliquam corrupti velit ducimus excepturi quisquam, numquam eos iste in maiores architecto reprehenderit, 
            tenetur atque voluptas soluta ea facere pariatur debitis dolorem non quae.',
            'category_id' => 2,
            'user_id' =>2
        ]);



    }
}
