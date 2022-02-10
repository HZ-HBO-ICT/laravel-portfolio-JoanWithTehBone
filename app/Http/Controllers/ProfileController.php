<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    /**
     * @return view of the profile page
     */
    public function show(): view
    {
        return view('profile');
    }
}
