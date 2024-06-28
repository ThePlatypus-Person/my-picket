<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class AccountsController extends Controller
{
    public function index()
    {
        $userList = $this->getUsersWithRoleNames();
        $roles = Role::all(); // Fetch all roles

        return view('accounts', compact('userList', 'roles'));
    }

      /**
     * Get an array of user_id, username, email, and role names for all users.
     *
     * @return array
     */
    protected function getUsersWithRoleNames()
    {
        return User::with('role') // Eager load the role relationship
            ->get()
            ->map(function ($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'role_name' => optional($user->role)->name, // Use optional() to handle null role
                    'role_id' => optional($user->role)->id, // Use optional() to handle null role
                ];
            })
            ->toArray();
    }

     /**
     * Update the role of a user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function updateRole(Request $request, User $user)
    {
        $request->validate([
            'role_id' => 'required|exists:roles,id',
        ]);

        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('accounts.index');
        /* ->with('success', 'User role updated successfully.'); */
    }

}
