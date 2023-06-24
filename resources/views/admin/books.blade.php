<!-- 
Nama : Sekar Gesti Amalia Utami 
NIM  : M0521071
Kelas: C
Prodi: Informatika

PRAKTIKUM 11 PEMROGRAMAN WEB -->
@extends('layouts.main-admin')
@section('title','Library Management System')

    
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
    <div class="notice-section">
        <div class="container">
            <h1>Data Buku Perpustakaan MCU</h1><br><br>
            <button style="background-color: rgb(244, 172, 78); border-radius: 7px; border-color: rgb(244, 172, 78);" type="button"  style="color: rgb(0, 0, 0);"><a class="nav-link" href="{{ route('books-create') }}">TAMBAH DATA BUKU</a></button>
            <br><br>
            <form action="" method="post" class="d-flex" role="search">
                <input class="form-control me-2" type="text" name="keyword" size="20" autofocus autocomplete="off" placeholder="Masukkan Keyword" aria-label="Search">
                <button style="background-color: rgb(244, 172, 78); border-radius: 7px; border-color: rgb(244, 172, 78);" type="submit" name="search">Search</button>
            </form>
            <br>
            <div class="card">
                <div class="card-body" style="background-color: rgb(244, 172, 78); border-radius: 7px;">
                  <blockquote class="blockquote mb-0">
                    <table class="table table-bordered">
                        <tr align="center">
                            <td><b>No.</td>
                            <td><b>Judul Buku</td>
                            <td><b>Pengarang</td>
                            <td><b>Penerbit</td>
                            <td><b>Tahun Terbit</td>
                            <td><b>Kategori</td>
                            <td><b>Manajemen</td>
                        </tr>
                        <tr align="center">
                            <?php $i = 1;?>
                            @foreach($books as $key=>$value)
                            <td align="center">{{ $i }}</td>
                                <td align="center">{{ $value->title }}</td>
                                <td align="center">{{ $value->author }}</td>
                                <td align="center">{{ $value->publisher }}</td>
                                <td align="center">{{ $value->year }}</td>
                                <td align="center">{{ $value->category }}</td>
                                <td align="center">
                                    <!-- Delete buku -->
                                    <form action="{{ route('books.destroy', ['book' => $value->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-dark">
                                        DELETE
                                        </button>
                                    </form>
                                    <!-- Update buku -->
                                        <a class="btn btn-dark" href="{{url('admin-edit/'.$value->id.'/edit')}}">UPDATE</a>
                                </td>
                        </tr>
                            <?php $i++; ?>
                            @endforeach
                    </table>
            </div>
        
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/65ec807597.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> 

      @endsection