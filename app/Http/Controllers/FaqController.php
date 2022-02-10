<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * @returns view of the of the FAQ
     */
    public function show()
    {
        $posts = Faq::all();
//        dd($posts[1] -> answer);
        return view('faq', [
            'posts' => $posts
        ]);
    }
}
