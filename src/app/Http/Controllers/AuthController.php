<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        return view('auth.admin');
    }

    public function register(RegisterRequest $request)
    {
        return view('auth.login');
    }

    public function store(RegisterRequest $request)
    {
        $user = User::create($request->only(['name', 'email','password']));
        return view('auth.login');
    }
}
