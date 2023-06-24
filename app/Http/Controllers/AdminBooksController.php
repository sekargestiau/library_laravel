<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;

class AdminBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function index_create()
    {
       
        return view('admin.create-books');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $model = new Books;
        // return view('admin.create-books', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string'],
            'author' => ['required', 'string'],
            'publisher' => ['required', 'string'],
            'year' => ['required', 'string'],
            'category' => ['required', 'string'],
        ]);

        // send error message
        if (!$validated) {
            return redirect()->back()->withInput()->withErrors($validated)->with('error', 'Validation failed. Data Gagal Dikirim!');
        }
        // if($request->file('profile_photo')) {
        //     $fileName = time().'_'.$request->file('profile_photo')->getClientOriginalName();
        //     $request->file('profile_photo')->move(public_path('profile_photo'), $fileName);
        //     $filePath = 'profile_photo/'.$fileName;

        //     $validated['profile_photo'] = $filePath;
        // }

        // create user
        Books::create([
            'title' => $validated['title'],
            'author' => $validated['author'],
            'publisher' => $validated['publisher'],
            'year' => $validated['year'],
            'category' => $validated['category'],
        ]);

        // send success message
        return redirect('admin-books')->with('success', 'Data Buku Berhasil Ditambahkan!');
        // $model = new Books;
        // $model->title = $request->title;
        // $model->author = $request->author;
        // $model->publisher = $request->publisher;
        // $model->year = $request->year;
        // $model->category = $request->category;
        // $model->save();

        // return redirect('admin-books');
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
        $model = Books::find($id);
        return view('admin.edit-books', compact('model'));
    }

    /*
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $model = Books::find($id);
        $model->title = $request->title;
        $model->author = $request->author;
        $model->publisher = $request->publisher;
        $model->year = $request->year;
        $model->category = $request->category;
        $model->save();

        return redirect('admin-books')->with('success', 'Data Buku Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Books::findOrFail($id)->delete();

        return redirect('admin-books')->with('success', 'Buku Berhasil Dihapus!');
    }
}
