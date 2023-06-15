<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Books::all();
        return view('home.books', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new Books;
        return view('home.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Books;
        $model->title = $request->title;
        $model->author = $request->author;
        $model->publisher = $request->publisher;
        $model->year = $request->year;
        $model->save();

        return redirect('books');
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
