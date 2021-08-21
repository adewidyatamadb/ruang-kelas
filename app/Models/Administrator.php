<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'email', 'jabatan'];

    // getAllAdministrator return all administrator data in ascending order by name
    public function getAllAdministrator(): Collection
    {
        return $this->orderBy('name', 'asc')->get();
    }

    // getAdministrator return one administrator data
    public function getOneAdministrator($id)
    {
        return $this->find($id)->first();
    }
}
