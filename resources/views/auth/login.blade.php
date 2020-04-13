<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Raka Ryamizard">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Login </title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">
</head>

<body>
    <form method="POST" 
          action="{{ route('postLogin') }}" 
          class="form-signin">
        @csrf
        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        </div>
        @include('alert')
        <div class="form-label-group">
            <input type="text" 
                 class="form-control" 
                 placeholder="Username"
                 name="username" 
                 required autofocus>
            <label for="username">Username</label>
        </div>
        <div class="form-label-group">
            <input type="password" 
                id="inputPassword"
                name="password" 
                class="form-control" 
                placeholder="Password" required>
            <label for="inputPassword">Password</label>
        </div>
        <div class="checkbox mb-3">
          <label>
           apakah anda tidak punya akun ? 
            <a href="{{ route('getRegister') }}">
              Register
            </a>
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2020</p>
    </form>
</body>

</html>
