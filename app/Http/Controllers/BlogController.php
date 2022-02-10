<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    /**
     * @returns view of the of the blog
     */
    public function show()
    {
        return view('blog');
    }
}
