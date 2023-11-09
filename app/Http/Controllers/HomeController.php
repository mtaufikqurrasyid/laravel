<?php

namespace App\Http\Controllers;


use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function berita()
    {
        $berita = Berita::all(); // Mengambil semua data berita dari database

        return view('berita', compact('berita'));
        // return view('berita');
    }

    public function profile_lulusan()
    {
        return view('profile_lulusan');
    }

    public function aktivitas_mahasiswa()
    {
        return view('aktivitas_mahasiswa');
    }



    


}