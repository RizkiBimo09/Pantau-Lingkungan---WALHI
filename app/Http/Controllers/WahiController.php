<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WahiController extends Controller
{
    // menampilkan halaman home
    public function Home()
    {
        return view('pages.home');
    }
    // menampilkan halaman PeduliLingkungan
    public function PLingkungan()
    {
        return view('');
    }
    // menampilkan halaman dashboard
    public function dashboard()
    {
        return view('');
    }
    // menampilkan halaman artikel
    public function artikel()
    {
        return view('');
    }
    // menampilkan halaman laporan
    public function lapor()
    {
        return view('');
    }
    // menampilkan halaman faq
    public function faq()
    {
        return view('');
    }
}
