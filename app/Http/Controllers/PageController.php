<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'NIM : 2241720051 <br> Nama : Cinhya Achwatul Ifnu';
    }

    public function articles($id)
    {
        return 'Halaman Artikel dengan ID '.$id;
    }
}
