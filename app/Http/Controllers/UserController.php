<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $data = $this->userService->getAllUsers();
        return view("users.index", ["data" => $data]);
    }

    public function create()
    {
        return view("users.create");
    }

    public function store(UserRequest  $request)
    {
        $this->userService->createUser($request);
        return redirect()->route("users.index")->with('success', 'User created successfully.');
    }
    public function edit($id)
    {
        $user = $this->userService->getUserById($id);
        $roles = Role::all();

        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $this->userService->updateUser($request, $id);

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully.');
    }
}
