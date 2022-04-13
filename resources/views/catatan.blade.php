<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <title>Peduli Diri | Catatan</title>
</head>
<body>
<body>
  <div class="continer d-flex">
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

    <div class="form-box mt-5">
      <h1>Peduli Diri</h1>
      <form action="{{ route('catatan-perjalanan.store') }}" method="post">
        @csrf
        <div class="mb-4 mt-5 row">
          <label for="inputTanggal" class="col-sm-2 col-form-label">Tanggal</label>
          <div class="col-sm-10 ml-3">
            <input type="date" class="form-control" name="tanggal" id="inputTanggal">
          </div>
        </div>
        <div class="mb-4 row">
          <label for="inputWaktu" class="col-sm-2 col-form-label">Jam</label>
          <div class="col-sm-10 ml-3">
            <input type="time" class="form-control" name="jam" id="inputWaktu">
          </div>
        </div>
        <div class="mb-4 row">
          <label for="inputLokasi" class="col-sm-2 col-form-label">Lokasi</label>
          <div class="col-sm-10 ml-3">
            <input type="text" class="form-control" name="location" id="inputLokasi">
          </div>
        </div>
        <div class="mb-4 row">
          <label for="inputSuhuTubuh" class="col-sm-2 col-form-label">Suhu Tubuh</label>
          <div class="col-sm-10  ml-3">
            <input type="number" class="form-control" name="body_temperature" id="inputSuhuTubuh">
          </div>
        </div>
        <input class="btn-catatan btn-primary mt-4" type="submit" value="Submit" />
      </form>
        </div>
      </form>
    </div>

  </div>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
