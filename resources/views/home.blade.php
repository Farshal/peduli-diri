<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Peduli Diri | Home</title>
</head>
<body>
  <div class="sidebar-container">
    <div class="sidebar-logo">
      Peduli Diri
    </div>
    <ul class="sidebar-navigation d-flex flex-column">
      <li class="mt-3">
        <a href="{{url('home')}}">
          <img src="{{ asset('img/icons-home-64.png') }}" width="25" alt=""> Home
        </a>
      </li>
      <li class="mt-3">
        <a href="{{ route('catatan-perjalanan.create') }}">
          <img src="{{ asset('img/icons8-schedule-50.png') }}" width="25" alt="">Catatan
        </a>
      </li>
      <li class="mt-3">
        <a href="{{ route('catatan-perjalanan.index') }}">
        <img src="{{ asset('img/icons8-check-new-folder-64.png') }}" width="25" alt=""> Isi Data
        </a>
      </li>
      <li class="mt-3 sign-out">
        <a href="{{url('logout')}}">
        <img src="{{ asset('img/icons8-sign-out-48.png') }}" width="25" alt=""> Sign out
        </a>
      </li>
    </ul>
  </div>

  <div class="content-container">

    <div class="container-fluid">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1 class="mt-4">Peduli diri</h1>
        <p>Selamat Datang di Peduli Diri Applikasi catatan Perjalan !!</p>
      </div>
      {{-- <div class="d-flex">
        <div class="card-home">
            <p>Catatan Perjalanan</p>
        </div>
        <div class="card-home">
            <p>Isi Data</p>
        </div>
      </div> --}}

    </div>
  </div>

  <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>