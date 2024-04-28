<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // page register function
    public function pageRegister()
    {
        return view('PageRegister', [
            'title' => 'Halaman Register'
        ]);
    }
    // register function
    public function register(Request $request)
    {
        $messages = [
            'id_u.required' => 'ID User wajib diisi ya😊',
            'id_u.unique' => 'ID User itu sudah dipakai oleh User lain',
            'id_u.min' => 'ID User minimal 5 angka ya',
            'id_u.max' => 'ID User maksimal 6 angka saja',
            'password.required' => 'Password wajib diisi ya😊',
            'password.min' => 'Password minimal 5 karakter',
            'password.max' => 'Password maksimal 6 karakter',
        ];
        $validate = $request->validate([
            'id_u' => ['required', 'unique:users,id_u', 'min:5', 'max:6'],
            'password' => ['required', 'min:5', 'max:6'],
        ], $messages);
        if($validate) {
            $createUser = [
                'id_u' => $request->id_u,
                'password' => $request->password,
                'role' => 'user',
            ];
            User::create($createUser);
            return redirect('/login')->with('success', 'Yeyy berhasil registrasi🎉');
        } else {
            return back()->withErrors($validate);
        }

    }
    // login page function 
    public function loginPage()
    {
        return view('PageLogin', [
            'title' => 'Halaman Login',
        ]);
    }
    // login function
    public function login(Request $request)
    {
        $messages = [
            'id_u.required' => 'ID User wajib diisi ya', 
            'password.required' => 'Password wajib diisi ya'
        ];
        $validate = $request->validate([
            'id_u' => ['required'],
            'password' => ['required']
        ], $messages);
        if($validate) {
            if(Auth::attempt($validate)) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }
            return back()->with('failed', 'ID User atau Password tidak sesuai');
        } else {
            return back()->withErrors($validate);
        }
    }
}
