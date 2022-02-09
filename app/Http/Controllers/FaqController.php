<?php

namespace App\Http\Controllers;

class FaqController extends Controller
{
    /**
     * @returns view of the of the FAQ
     */
    public function show()
    {
        return view('faq');
    }
}
