<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function show()
    {
        $roles = Role::with(['users'])->get();

        return view('role.show', [
            'roles' => $roles,
        ]);
    }
}
