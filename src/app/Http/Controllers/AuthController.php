<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //ログイン処理
    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
        $request->session()->regenerate();

        // ユーザー情報を取得してis_adminをチェック
        //管理者ユーザーのみ管理者ページにリダイレクト
        $user = Auth::user();
        if ($user && $user->is_admin) {
            return redirect()->route('auth.admin');
        }

        // 通常のユーザーは他のページにリダイレクト
        return redirect()->route('auth.register'); 
    }
    }

    //登録ページの表示
    public function register(RegisterRequest $request)
    {
        return view('auth.register');
    }

    //ユーザー登録処理
    public function store(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => true, //管理者としてユーザーを作成
        ]);
        return redirect()->route('auth.login');
    }

    // 管理者ページの表示
    public function admin(Request $request)
    {
        $contents = Contact::all();

        return view('auth.admin', compact('contents'));
    }

    //お問い合わせフォーム
    public function contact(Request $request)
    {
        return view('auth.contact');
    }
}
