<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login.index');
    }

    public function login(Request $request)
    {
        if (\request()->ajax()) {
            $credentials = $request->validate([
                'email' => 'required',
                'password'  => 'required'
            ]);
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return response()->json([
                'success'   => true,
                'message'   => 'Anda berhasil login',
            ], 200);
        }

        return response()->json([
            'success'   => false,
            'message'   => 'Email Atau Password Salah!',
        ], 302);
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
