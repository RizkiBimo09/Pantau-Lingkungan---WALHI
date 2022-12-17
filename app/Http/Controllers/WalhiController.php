<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class WalhiController extends Controller
{
    // menampilkan halaman home
    public function Home()
    {
        return view('pages.home', [
            'title' => 'Home'
        ]);
    }
    // menampilkan halaman PeduliLingkungan
    public function PLingkungan()
    {
        return view('pages.PLingkungan', [
            'title' => 'Pantau Lingkungan'
        ]);
    }
    // menampilkan halaman dashboard
    public function Dashboard()
    {
        return view('pages.Dashboard', [
            'title' => 'Dashboard'
        ]);
    }
    // menampilkan halaman artikel
    public function Artikel()
    {
        return view('pages.artikel', [
            'title' => 'Artikel'
        ]);
    }
    public function DetailArtikel()
    {
        return view('pages.detailartikel', [
            'title' => 'Artikel'
        ]);
    }
    // menampilkan halaman laporan
    public function Lapor()
    {
        return view('pages.lapor', [
            'title' => 'Lapor'
        ]);
    }
    // menampilkan halaman faq
    public function Faq()
    {
        return view('pages.faq', [
            'title' => 'Faq'
        ]);
    }
    // menampilkan halaman login
    public function Login()
    {
        return view('pages.login', [
            'title' => 'Login'
        ]);
    }
    // menampilkan halaman autentikasi
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Failed!');

    }
    // menampilkan halaman autentikasi
    public function Register()
    {
        return view('pages.register', [
            'title' => 'Register'
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/login');
    }
    public function logout(){
    
    Auth::logout();
    
    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect('/');

    }
}
