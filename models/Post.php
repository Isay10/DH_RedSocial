<?php

class Post {


  private static $posteos= [
      ['image' => 'https://via.placeholder.com/350x250', 'title' => 'Titulo 1', 'description' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.'],
      ['image' => 'https://via.placeholder.com/350x250', 'title' => 'Titulo 2', 'description' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.'],
      ['image' => 'https://via.placeholder.com/350x250', 'title' => 'Titulo 3', 'description' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.']
  ];


  public static function getPosts(){

    return self::$posteos;

  }


}



 ?>
