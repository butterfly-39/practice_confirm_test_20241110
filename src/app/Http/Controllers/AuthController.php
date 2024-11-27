<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register(AuthRequest $request)
    {
        return view('login');
    }
}
