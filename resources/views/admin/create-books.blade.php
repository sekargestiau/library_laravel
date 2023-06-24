<!-- 
Nama : Sekar Gesti Amalia Utami 
NIM  : M0521071
Kelas: C
Prodi: Informatika

PRAKTIKUM 11 PEMROGRAMAN WEB -->
@extends('layouts.main-admin')
@section('title','Usulan Buku Perpustakaan MCU')

    
    @section('container')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1 style="margin-left:50px; margin-right:50px;">Form Tambah Buku Perpustakaan MCU<br></h1>
    <br>
    <form class="row g-3" action="{{ route('books.store') }}" method="post" enctype="multipart/form-data" style="margin-left:50px; margin-right:50px;">
    @csrf
        <div class="col-md-5">
            <label for="title" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="col-md-5">
            <label for="author" class="form-label">Pengarang</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="col-md-5">
            <label for="publisher" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="publisher" name="publisher" required>
        </div>
        <div class="col-md-5">
            <label for="year" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" id="year" name="year" required>
        </div>
        <div class="col-md-5">
            <label for="category" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="category" name="category" required>
        </div>
        <div class="col-12">
          <br>
          <button class="btn btn-warning" type="submit" name="submit">Submit</button>
        </div>
      </form>
        
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/65ec807597.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>        
@endsection