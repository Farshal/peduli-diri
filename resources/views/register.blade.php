<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <title>Peduli Diri | Register</title>
</head>
<body>
  <div class="container mt-5">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9" >

        <div class="card o-hidden border-0 shadow-lg my-5 content-login">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 content-desc">
                <div class="d-flex float-end mt-4 mr-3 nav-login">
                  <a href="{{url('login')}}"><h5 class="mx-3 link-signin-regis">Sign in</h5></a>  
                  <a href="{{url('register')}}"><h5 class="link-signup-regis">Sign up</h5></a>
                </div>
                <div class="header-textlogin mt-3">
                  <h1>SIGN IN</h1>
                  <p>Sign in to continue to our application</p>
                </div>
                <form class="form-login" method="post" action="/register">
                  @csrf
                  <div class="mb-2">
                    <label class="form-label"></label>
                    <input type="text" class="form" name="name" placeholder="Nama Lengkap">
                  </div> 
                  <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label"></label>
                    <input type="number" class="form" name="nik" placeholder="NIK">
                  </div>
                  <div class="mb-2s">
                    <label for="exampleInputPassword1" class="form-label"></label>
                    <input type="email" class="form" id="exampleInputPassword1" name="email" placeholder="Email">
                  </div>
                  <button type="submit" class="btn btn-primary mt-4">Sign-Up</button>
                </form>
            </div>
              <div class="col-lg-6 d-lg-block background-sign-in">
                  <img src="{{ asset('img/register-image.png') }}" width="420" height="450" class="login-ilust">
              </div>
            </div>
          </div>

       </div>

    </div>

  </div>

<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>