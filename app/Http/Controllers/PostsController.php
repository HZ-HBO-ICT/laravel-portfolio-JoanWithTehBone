<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    /**
     * @returns view of the of the Posts Pages
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();


        return view('post', [
            'post' => $post
        ]);
    }
}
