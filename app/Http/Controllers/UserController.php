<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Forcefully delete a user account.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function forceDelete(User $user)
    {
        try {
            // Force delete the user record
            $user->forceDelete();

            return redirect()->back();
        } catch (\Exception $e) {
            // Handle any errors or exceptions
            return redirect()->back();
        }
    }
}
