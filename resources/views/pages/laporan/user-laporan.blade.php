<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>LAPOR!</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/cover/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="screen">
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
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">Cover</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="#">Lapor</a>
                </nav>
            </div>
        </header>
        <main role="main" class="inner cover">
            <h1 class="cover-heading">LAPOOR !!</h1>
            <div class="form-group">
                <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul...">
            </div>

            <div class="form-group">
                <textarea class="form-control mb-3" placeholder="Isi Laporan" name="pengaduan" rows="3"></textarea>
            </div>

            <div class="form-group">
                <input type="file" name="foto" class="form-control" onchange="previewFile()">
            </div>  
            <div class="form-group">
                <img src="" alt="Image preview..." height="200" id="img">
            </div>

            <a href="#" class="btn btn-block btn-primary">Learn more</a>
        </main>
        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>&copy; Titam Septian 2020</p>
            </div>
        </footer>
    </div>
    <script>
        function previewFile() {
          let preview = document.querySelector('#img');
          let file    = document.querySelector('input[type=file]').files[0];
          let reader  = new FileReader();

          reader.onloadend = function () {
            preview.src = reader.result;
          }

          if (file) {
            reader.readAsDataURL(file);
          } else {
            preview.src = "";
          }
        }
    </script>
</body>

</html>
