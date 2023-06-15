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