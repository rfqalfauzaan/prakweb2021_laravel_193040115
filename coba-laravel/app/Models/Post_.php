<?php

namespace App\Models;


class Post 
{
    private static $blog_post = [
         
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


    public static function all()
        {
            return collect(self::$blog_post) ;
        }
    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        // if($p["slug"]=== $slug){
        //     $post = $p ;
        //     }
        // }

        return $posts->firstWhere('slug', $slug) ;
    }
}
