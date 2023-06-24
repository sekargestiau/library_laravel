<!-- 
Nama : Sekar Gesti Amalia Utami 
NIM  : M0521071
Kelas: C
Prodi: Informatika

PRAKTIKUM 11 PEMROGRAMAN WEB -->
@extends('layouts.main-admin')
@section('title','Tambah Data Anggota Perpustakaan MCU')

    
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
    <form class="row g-3" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data" style="margin-left:50px; margin-right:50px;">
    @csrf
        <div class="col-md-5">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="col-md-5">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-md-5">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="col-md-5">
            <label for="profile_photo" class="form-label">Upload Foto Diri</label>
            <input type="file" accept="image/png, image/gif, image/jpeg" class="form-control" id="profile_photo" name="profile_photo" required>
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