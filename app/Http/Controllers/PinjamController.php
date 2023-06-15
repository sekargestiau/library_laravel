<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjam;


class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new Pinjam;
        return view('home.form', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Pinjam;
        $model->id_books = 1;
        $model->nama = $request->nama;
        $model->nim = $request->nim;
        $model->prodi = $request->prodi;
        $model->fakultas = $request->fakultas;
        $model->judul_buku = $request->judul_buku;
        $model->kode_buku = $request->kode_buku;
        $model->tgl_pinjam = $request->tgl_pinjam;

        $model->save();

        return redirect('form');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
