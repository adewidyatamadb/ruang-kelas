<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdministratorRequest;
use Illuminate\Contracts\View\View;
use App\Models\Administrator;
use Illuminate\Http\RedirectResponse;

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

    // store saves admninistrator into database then redirect to the administrator index page
    public function store(AdministratorRequest $request): RedirectResponse
    {
        $this->administrator->addAdministrator($request);
        return redirect(route('administrator.index'))->with('success', "Successfully adding administrator");
    }

    // edit return view of the edit administator page
    public function edit($id): View
    {
        return view(
            'admin.administrator.edit',
            ['administrator' => $this->administrator->getAdministrator($id)]
        );
    }

    // update update administrator data in the database then redirect to them to administration index
    public function update(AdministratorRequest $request, $id): RedirectResponse
    {
        $this->administrator->updateAdministrator($request, $id);
        return redirect(route('administrator.index'))->with('success', "Successfully updating administrator");
    }

    // destroy is controller to delete data and redirect them to the administrator index if success
    public function destroy($id): RedirectResponse
    {
        $this->administrator->deleteAdministrator($id);
        return redirect(route('administrator.index'))->with('success', 'Successfully deleting administrator');
    }
}
