<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    /**
      * @param $post the post being redirected to
      * @return view of the of the blog
      */
    public function show($post)
    {
        return view($post);
    }
}
