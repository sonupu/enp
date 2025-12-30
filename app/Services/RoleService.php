<?php
// app/Services/RoleService.php

namespace App\Services;

use App\Http\Requests\RoleRequest;
use Illuminate\Support\Facades\Hash;
use Pest\Mutate\Mutators\Visibility\FunctionPublicToProtected;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpFoundation\Request;

class RoleService
{
    /**
     * Fetch a Role by their ID.
     *
     * @param int $RoleId
     * @return \App\Models\Role|null
     */

    public function getAllRoles()
    {
        return Role::with("permissions")->get();
    }
    public function createRole(Request $request)
    {
        $request->validate([
        'name' => 'required|unique:roles,name',
        'permissions' => 'array'
    ]);

    $role = Role::create([
        'name' => $request->name,
    ]);

    // ✅ Correct way to assign permissions from checkbox array
    if ($request->has('permissions')) {
        $role->syncPermissions($request->permissions);
    }
    }
}
