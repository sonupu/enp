<?php
// app/Services/UserService.php

namespace App\Services;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    /**
     * Fetch a user by their ID.
     *
     * @param int $userId
     * @return \App\Models\User|null
     */
    public function getUserById(int $userId)
    {
        // Example logic:
        return \App\Models\User::find($userId);
    }
    public function  getAllUsers()
    {
        return User::with('roles')->get();
    }
    public function createUser(UserRequest $request)
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);
    }
    public function updateUser($request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
        ]);

        if ($request->role) {
            $user->syncRoles([$request->role]);
        }

        return $user;
    }
}
