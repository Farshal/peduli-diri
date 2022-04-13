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

    <div class="content-container">
        <div class="cantainer-fluid container-isidata">
            <h1>Peduli Diri</h1>
            <table class="table mt-5">
                <thead>
                    <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Suhu Tubuh</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $items)
                      <tr>
                        <td>
                          {{ $items->tanggal }}
                        </td>

                        <td>
                          {{ $items->jam }}
                        </td>

                        <td>
                          {{ $items->location }}
                        </td>

                        <td>
                          {{ $items->body_temperature }}°C
                        </td>

                        <td>
                          <div class="d-flex text-center">
                            <a href="{{ route('catatan-perjalanan.edit', $items->id) }}" class="btn btn-info btn-sm me-2">
                              Update
                            </a>
                            
                            <form action="{{ route('catatan-perjalanan.destroy', $items->id) }}" method="post">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                            </form>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

  </div>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>