<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriAksesController extends Controller
{
    //
    public function index()
    {
        $title = 'Kategori Akses';
        return view('kategori.akses', ['title' => $title]);
    }
}
