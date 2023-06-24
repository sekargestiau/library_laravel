<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function index_admin()
    {
        // $books = Books::latest()->get();
        $user = User::all();
        // $books = Books::first()->get();
        // $books = Books::latest()->first()->get();
        // $user = User::latest()
        //                 ->orderBy('year','asc')
                        // ->groupBy('category')
                        // ->get();
        // return view('home.books', compact('datas'));
        // $books = DB::select('select * from books');
 
        return view('admin.user', ['user' => $user]);
    }

    public function index_create()
    {
       
        return view('admin.create-user');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:8'],
            'profile_photo' => ['nullable'],
        ]);

        // send error message
        if (!$validated) {
            return redirect()->back()->with('error', 'Validation failed!');
        }

        if($request->file('profile_photo')) {
            $fileName = time().'_'.$request->file('profile_photo')->getClientOriginalName();
            $request->file('profile_photo')->move(public_path('profile_photo'), $fileName);
            $filePath = 'profile_photo/'.$fileName;

            $validated['profile_photo'] = $filePath;
        }

        // create user
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'profile_photo' => $validated['profile_photo'],
        ]);

        // send success message
        return redirect('admin-user')->with('success', 'User created!');
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
        $model = User::find($id);
        return view('admin.edit-user', compact('model'));
    }

    /*
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $model = User::find($id);
        $model->name = $request->name;
        $model->email = $request->email;
        $model->password = $request->password;
        $model->profile_photo = $request->profile_photo;
        $model->save();

        return redirect('admin-user')->with('success', 'Data Buku Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findOrFail($id)->delete();

        return redirect('admin-user')->with('success', 'User Berhasil Dihapus!');
    }
}
