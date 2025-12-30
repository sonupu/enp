<?php

namespace App\Http\Controllers;

use App\Services\RoleService;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    protected $roleService;
    public function __construct(RoleService $roleService)
    {
        $this->roleService=$roleService;
    }
    public function index(){
        $roles=$this->roleService->getAllRoles();
        return view("Roles.index",compact("roles"));
    }
    public function create(){
        $permissions=Permission::all();
        return view("Roles.create",compact("permissions"));
    }

    public function store(Request $request){
        $this->roleService->createRole($request);
         return redirect()->route("role.index")->with('success', 'Role created successfully.');
    }
}
