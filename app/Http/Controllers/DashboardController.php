<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get authenticated user
        $userRole = $user->role->name; // Get names of user's role

        return view('dashboard', ['userRole' => $userRole]);
    }
}
