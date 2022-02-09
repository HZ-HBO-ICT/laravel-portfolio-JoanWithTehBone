<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * @returns view of the of the dashboard
     */
    public function show()
    {
        return view('dashboard');
    }
}
