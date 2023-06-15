<!-- 
Nama : Sekar Gesti Amalia Utami 
NIM  : M0521071
Kelas: C
Prodi: Informatika

PRAKTIKUM 10 PEMROGRAMAN WEB -->
@extends('layouts.main')
@section('title','Data Buku Perpustakaan MCU')

    
    @section('container')
    <div class="notice-section">
        <div class="container">
            <h1>Data Buku Perpustakaan MCU</h1><br><br>
            <button style="background-color: rgb(244, 172, 78); border-radius: 7px; border-color: rgb(244, 172, 78);"><a class="nav-link" href="add-buku.php" style="color: rgb(0, 0, 0);">TAMBAH DATA BUKU</a></button>
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
                            <td><b>Kode Buku</td>
                            <td><b>Judul Buku</td>
                            <td><b>Pengarang</td>
                            <td><b>Penerbit</td>
                            <td><b>Tahun Terbit</td>
                            <td><b>Gambar Buku</td>
                            <td><b>Manajemen</td>
                        </tr>
                        <tr align="center">
                            <?php $i = 1;?>
                            <?php foreach ($buku as $row): ?>
                                <td align="center"><?= $i; ?></td>
                                
                                <td align="center"><?= $row["kode"]; ?></td>
                                <td align="center"><?= $row["judul"]; ?></td>
                                <td align="center"><?= $row["pengarang"]; ?></td>
                                <td align="center"><?= $row["penerbit"]; ?></td>
                                <td align="center"><?= $row["tahun_terbit"]; ?></td>
                                <td align="center">
                                    <img src="img/<?= $row["image"]; ?>" alt="none" width="80px" height="60px">
                                </td>
                                <td align="center">
                                    <a href="update-buku.php?id=<?= $row["id"]; ?>">UPDATE</a>
                                    <a href="delete-buku.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah data akan dihapus?');">DELETE</a>
                                </td>
                        </tr>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                    </table>
            </div>
        
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>  
   @endsection
        
       