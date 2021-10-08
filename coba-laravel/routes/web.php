<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home' ,[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About" ,
        "name" =>"Muhammad Rifqi Al Fauzaan", 
        "email"=>"alfauzaan.rifqi@gmail.com" ,
        "image" => "1.jpeg"
    ]);
});


Route::get('/blog', function () {
    $blog_post = [
        [
        "title" =>"Judu Post Pertama" ,
        "slug" => "judul-post-pertama",
        "author" => "Rifqi",
        "body" =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia 
        voluptas dolore iste corrupti suscipit veniam explicabo quis quia quae distinctio, non ex nul
        la tempora eos ad consequatur cupiditate velit aperiam quos officiis iusto ea, numquam sit. Perferendis
        aliquam repellat veniam quos at voluptate quam, corrupti minus eius! Sint voluptatum rem quae obcaecati 
        nesciunt illum quasi quo similique laborum aspernatur architecto quis, cum porro dolorum expedita magnam.
        Commodi, quasi, maxime animi a ad soluta, mollitia doloribus aliquam sapiente aspernatur quos eum."  
        ],
        [
            "title" =>"Judul Post Kedua" ,
            "slug" => "judul-post-kedua",
            "author" => "Alfa",
            "body" =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia 
            voluptas dolore iste corrupti suscipit veniam explicabo quis quia quae distinctio, non ex nul
            la tempora eos ad consequatur cupiditate velit aperiam quos officiis iusto ea, numquam sit. Perferendis
            aliquam repellat veniam quos at voluptate quam, corrupti minus eius! Sint voluptatum rem quae obcaecati 
            ."  
            ]
    ];
    

    return view('posts' ,[
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});

// halaman single post
Route :: get('posts/{slug}', function($slug){

    $blog_post = [
        [
        "title" =>"Judu Post Pertama" ,
        "slug" => "judul-post-pertama",
        "author" => "Rifqi",
        "body" =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia 
        voluptas dolore iste corrupti suscipit veniam explicabo quis quia quae distinctio, non ex nul
        la tempora eos ad consequatur cupiditate velit aperiam quos officiis iusto ea, numquam sit. Perferendis
        aliquam repellat veniam quos at voluptate quam, corrupti minus eius! Sint voluptatum rem quae obcaecati 
        nesciunt illum quasi quo similique laborum aspernatur architecto quis, cum porro dolorum expedita magnam.
        Commodi, quasi, maxime animi a ad soluta, mollitia doloribus aliquam sapiente aspernatur quos eum."  
        ],
        [
            "title" =>"Judul Post Kedua" ,
            "slug" => "judul-post-kedua",
            "author" => "Alfa",
            "body" =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia 
            voluptas dolore iste corrupti suscipit veniam explicabo quis quia quae distinctio, non ex nul
            la tempora eos ad consequatur cupiditate velit aperiam quos officiis iusto ea, numquam sit. Perferendis
            aliquam repellat veniam quos at voluptate quam, corrupti minus eius! Sint voluptatum rem quae obcaecati 
            ."  
            ]
    ];

    foreach ($blog_post as $post) {
        if($post["slug"]=== $slug){
            $new_post = $post ;
        }
    }
    return view ('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});