<?php

namespace App\Http\Controllers;

use App\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->get();

        return view('welcome', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('detail', compact('user'));
    }
}
