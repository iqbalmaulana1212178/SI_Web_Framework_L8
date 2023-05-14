<?php

namespace App\Models;



class Post 
{
  private static $blog_post = [
    [
      "title" => "Ma Masa Is Posting",
      "slug" => "pos-pertama",
      "author" => "Riski awali",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt molestias laudantium repellendus, in neque similique consequuntur porro? Eligendi soluta doloribus alias, quod ipsam autem beatae ea natus a. Totam, tenetur."
    ] ,
    [
      "title" => "Ma Mini Mos",
      "slug" => "pos-kedua",
      "author" => "Rijal Geming",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt molestias laudantium repellendus, in neque similique consequuntur porro? Eligendi soluta doloribus alias, quod ipsam autem beatae ea natus a. Totam, tenetur."
    ]  
  ];

  public static function all(){
    return collect(self::$blog_post);
        
  }

  public static function find($slug){
    $post = static::all();
     return $post->firstWhere('slug', $slug);
  }
}
