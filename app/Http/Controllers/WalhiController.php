<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function PLingkunganINA()
    {
        return view('pages.PLingkunganINA', [
            'title' => 'Pantau Lingkungan'
        ]);
    }
    public function PLingkunganEN()
    {
        return view('pages.PLingkunganEN', [
            'title' => 'Pantau Lingkungan'
        ]);
    }
    // menampilkan halaman dashboard
    public function Dashboard()
    {
        return view('pages.dashboard', [
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
}
