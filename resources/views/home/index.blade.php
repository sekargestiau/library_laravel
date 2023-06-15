<!-- 
Nama : Sekar Gesti Amalia Utami 
NIM  : M0521071
Kelas: C
Prodi: Informatika

PRAKTIKUM 10 PEMROGRAMAN WEB -->
@extends('layouts.main')
@section('title','Website Perpustakaan MCU')

    
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

    <div class="row" style="background-color: rgb(244, 172, 78);">
        <div class="col" style="background-color: rgb(244, 172, 78);">
          <marquee direction="left">
          <h2 align="center">Selamat Datang Di Website Perpustakaan MCU</h2>
         
        </marquee>
        </div>
      </div>

    <br>
    <div class="notice-section">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-4" style="width: 80%">
              <div class="card" style="width: 100%">
                <div class="card-header" style="background-color: rgb(244, 172, 78);">
                  <h4>Sambutan Kepala Perpustakaan MCU</h4>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p align="justify">Assalamu'alaikum Wr. Wb.<br><br>
                      Puji syukur kita panjatkan kepada Allah SWT yang telah memberikan limpahan rahmat dan nikmat kepada kita semua sehingga website Perpustakaan MCU dapat diaktifkan kembali.<br>
                      <br>
                      Website perpustakaan merupakan sebuah layanan web yang hadir sebagai media komunikasi dan interaksi antara perpustakaan dan civitas akademik universitas. Semua pihak yang berkepentingan dengan dunia pendidikan terutama yang berlangsung di universitas ini seperti dosen, tenaga kependidikan, dan mahasiswa dapat mengakses berbagai informasi yang disediakan. Informasi tersebut antara lain tentang profile perpustakaan, daftar buku yang ada di perpustakaan, peminjaman buku di perpustakaan, dan berbagai informasi penting lainnya. Melalui website ini kami akan mengkomunikasikan bagaimana detak jantung kegiatan perpustakaan dalam rangka memberikan layanan pendidikan terbaik kepada civitas akademik universitas.
                      Mudah-mudahan kehadiran website ini akan memberikan manfaat kepada civitas akademik universitas dalam rangka memajukan pendidikan di Indonesia.
                      <br><br>
                      Wassalamu'alaikum Wr.Wb.</p><br>
                    <footer class="blockquote-footer">Kepala Perpustakaan MCU <cite title="Source Title"></cite></footer>
                  </blockquote>
                </div>
            </div>
            </div>
            <div class="col-4" style="width: 20%">
              <div class="row">
                <div class="col" >
                  <div class="card" style="width: 15rem; height: 13rem;" >
                      <h5 class="card-title notice" style="background-color: rgb(244, 161, 61);" align="center">Berita Terbaru</h5>
                      <div class="card-body">
                          <marquee direction="up">
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          </marquee>
                      </div>
                    </div>
                </div>
                <br> <br>
                <div class="col" >
                  <div class="card" style="width: 15rem; height: 13rem;">
                      <h5 class="card-title notice" style="background-color: rgb(244, 161, 61);" align="center">Berita Terbaru</h5>
                      <div class="card-body">
                          <marquee direction="up">
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          </marquee>
                      </div>
                    </div>
                </div>
                <br><br>
                <div class="col" >
                  <div class="card" style="width: 15rem; height: 13rem;">
                      <h5 class="card-title notice" style="background-color: rgb(244, 161, 61);" align="center">Berita Terbaru</h5>
                      <div class="card-body">
                          <marquee direction="up">
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          </marquee>
                      </div>
                    </div>
                </div>
              </div>
              </div>
          </div>
        </div></div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        @endsection