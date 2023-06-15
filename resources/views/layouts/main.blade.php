<!-- 
Nama : Sekar Gesti Amalia Utami 
NIM  : M0521071
Kelas: C
Prodi: Informatika

PRAKTIKUM 10 PEMROGRAMAN WEB -->
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.head')
        <title>@yield('title')</title>
    </head>
  <body style="background-color: antiquewhite;">
    <main>
        @include('layouts.header')
        @yield('container')
    </main>
    <!-- <footer>
        @include('layouts.footer')
    </footer> -->
  </body>
</html>