<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    // public function show_home(){
    //     return view('home.home');
    // }

    public function table(){
        $nama = "sparker";
        $daftar_buku = ["Kucing", "Jerapah", "Bebek"];
        return view('home.table', compact('nama', 'daftar_buku'));
    }

    public function form(){
        return view('home.form');
    }

    public function books(){
        return view('home.books');
    }

}
