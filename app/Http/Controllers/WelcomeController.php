<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    /**
     * @returns view of the of the Landing page
     */
    public function show()
    {
        return view('welcome');
    }
}
