<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Administrator;

class AdministratorController extends Controller
{

    public function __construct(Administrator $administrator)
    {
        $this->administrator = $administrator;
    }

    // index return view and display all administrator data in ascending order
    public function index(): View
    {
        return view(
            'admin.administrator.index',
            ['administrators' => $this->administrator->getAllAdministrator()]
        );
    }

    // create return view of the create administrator page
    public function create(): View
    {
        return view('admin.administrator.create');
    }

    public function store()
    {
    }

    public function edit($id): View
    {
        return view(
            'admin.administrator.edit',
            ['administrator' => $this->administrator->getOneAdministrator($id)]
        );
    }
}
