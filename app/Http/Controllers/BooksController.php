<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $books = Books::latest()->get();
        $books = Books::all();
        // $books = Books::first()->get();
        // $books = Books::latest()->first()->get();
        $books = Books::latest()
                        ->orderBy('year','asc')
                        // ->groupBy('category')
                        ->get();
        // return view('home.books', compact('datas'));
        // $books = DB::select('select * from books');
 
        return view('home.books', ['books' => $books]);
    }

    public function index_admin()
    {
        // $books = Books::latest()->get();
        $books = Books::all();
        // $books = Books::first()->get();
        // $books = Books::latest()->first()->get();
        $books = Books::latest()
                        ->orderBy('year','asc')
                        // ->groupBy('category')
                        ->get();
        // return view('home.books', compact('datas'));
        // $books = DB::select('select * from books');
 
        return view('admin.books', ['books' => $books]);
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
        $model->category = $request->category;
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
