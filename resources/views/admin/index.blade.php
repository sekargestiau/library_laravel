<!-- 
Nama : Sekar Gesti Amalia Utami 
NIM  : M0521071
Kelas: C
Prodi: Informatika

PRAKTIKUM 11 PEMROGRAMAN WEB -->
@extends('layouts.main-admin')
@section('title','Library Management System')

    
    @section('container')
<div class="notice-section">
        <div class="container">
            <div class="card">
                <div class="card-body" style="background-color: rgb(244, 172, 78);">
                  <blockquote class="blockquote mb-0">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                          <div class="card h-100">
                            <img src="{{ asset('img/book1.jpg') }}" class="card-img-top" alt="book-image1">
                            <div class="card-body">
                                <div class="card-header" style="background-color: rgb(244, 172, 78);">
                                <br><h4 align="center"><a class="nav-link" href="{{url('admin-books')}}" style="color: rgb(0, 0, 0);">DATA BUKU</a></h4><br>
                                  </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                              <img src="{{ asset('img/people.jpg') }}" class="card-img-top" alt="book-image2">
                              <div class="card-body">
                                <div class="card-header" style="background-color: rgb(244, 172, 78);">
                                <br><h4 align="center"><a class="nav-link" href="{{url('admin-user')}}" style="color: rgb(0, 0, 0); font-size: 93%;">DATA ANGGOTA PERPUSTAKAAN</a></h4><br>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/65ec807597.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

      @endsection