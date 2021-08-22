<?php

namespace App\Models;

use App\Http\Requests\AdministratorRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'jabatan'];

    // getAllAdministrator return all administrator data in ascending order by name
    public function getAllAdministrator(): Collection
    {
        return $this->orderBy('name', 'asc')->get();
    }

    // getAdministrator return one administrator data
    public function getAdministrator($id): Administrator
    {
        return $this->findOrFail($id);
    }

    // addAdministrator adding administrator to the database
    public function addAdministrator(AdministratorRequest $request): object
    {
        return $this->create($request->validated());
    }

    // updateAdministrator updating administrator data
    public function updateAdministrator(AdministratorRequest $request,  $id): bool
    {
        return $this->findOrFail($id)->update($request->validated());
    }

    // deleteAdministrator deleting administrator data from database
    public function deleteAdministrator($id): bool
    {
        return $this->findOrFail($id)->delete();
    }
}
