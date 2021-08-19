<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Administrator;

class AdministratorController extends Controller
{
    // index return view and display all administrator data in ascending order
    public function index(): View
    {
        return view(
            'admin.administrator.index',
            ['administrators' => Administrator::orderBy('name', 'asc')->get()]
        );
    }
}
