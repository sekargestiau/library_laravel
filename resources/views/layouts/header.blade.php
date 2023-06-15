<div class="header">
        <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(244, 172, 78);" data-bs-theme="danger">
          <div class="container text-center">
            <div class="row justify-content-start">
              <div class="col-4">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" width="100" class="d-inline-block align-text-top">
              </div>
              <div class="col-8" width="100%">
                <br>
                <h5 align="left"><b>Perpustakaan MCU</b> </h5>
                <p align="left"> Jalan Asgard No. 1, New York</p>
              </div>
            </div>
          </div>
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" class="btn btn-outline-secondary" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-tabs me-auto mb-2 mb-lg-0">
                <li class="nav-item" style="background-color: rgb(244, 172, 78);">
                    <a class="nav-link active" aria-current="page" href="{{url('home')}}" style="color: rgb(0, 0, 0);">Home</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="profil.php" style="color: rgb(0, 0, 0);">Profil</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('books')}}" style="color: rgb(0, 0, 0);">Daftar Buku</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('form')}}" style="color: rgb(0, 0, 0);">Peminjaman Buku</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="denda.php" style="color: rgb(0, 0, 0);">Perhitungan Denda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php" style="color: rgb(0, 0, 0);">Logout</a>
                  </li> -->
                </ul>
              </div>
            </div>
          </nav>
    </div>