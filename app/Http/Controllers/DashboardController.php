<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // index display all administrator data in the administrator index page
    public function index()
    {
        return view('admin.index');
    }
}
