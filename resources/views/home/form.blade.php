<!-- 
Nama : Sekar Gesti Amalia Utami 
NIM  : M0521071
Kelas: C
Prodi: Informatika

PRAKTIKUM 10 PEMROGRAMAN WEB -->
@extends('layouts.main')
@section('title','Pinjam Buku Perpustakaan MCU')

    
    @section('container')

    <div class="main-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/lib.jpg') }}" class="d-block w-100" alt="library-image1">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/lib3.jpg') }}" class="d-block w-100" alt="library-image2">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/lib4.jpg') }}" class="d-block w-100" alt="library-image3">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/lib5.jpg') }}" class="d-block w-100" alt="library-image4">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/lib6.jpg') }}" class="d-block w-100" alt="library-image5">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    <h1 style="background-color: rgb(244, 172, 78);" align="center">Form Peminjaman Buku Perpustakaan MCU<br></h1>
    <br>
    <form class="row g-3" style="margin-left:50px; margin-right:50px;">
        <div class="col-md-4">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" patern="[a-zA-Z]" required>
        </div>
        <div class="col-md-4">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" patern="[a-zA-Z0-9]" required minlength="8" maxlength="8">
        </div>
        <div class="col-md-4">
            <label for="prodi" class="form-label">Prodi</label>
            <input type="text" class="form-control" id="prodi" patern="[a-zA-Z]" required>
        </div>
        <div class="col-md-4">
            <label for="fakultas" class="form-label">Fakultas</label>
            <input type="text" class="form-control" id="fakultas" patern="[a-zA-Z]" required>
        </div>
        <div class="col-md-4">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul_buku" patern="[a-zA-Z]" required>
        </div>
        <div class="col-md-4">
            <label for="kode_buku" class="form-label">Kode Buku</label>
            <input type="text" class="form-control" id="kode_buku" patern="[a-zA-Z0-9]" required minlength="6" maxlength="6">
        </div>
        <div class="col-md-4">
            <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="tgl_pinjam" required>
        </div>
        <div class="col-12">
          <button class="btn btn-warning" type="submit">Submit form</button>
        </div>
      </form>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection