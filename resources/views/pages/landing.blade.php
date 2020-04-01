<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Navbar */
        .navbar-brand {
            font: 32px Viga;
        }


        /* Jumbotron */
        .jumbotron {
            background: url({{asset('tmp/img/jumbotron-bg.jpg')}});
            background-size: cover;
            height: 540px;
            position: relative;
            z-index: -1;
        }

        .jumbotron::after {
            content: '';
            display: block;
            position: absolute;
            width: 100%;
            height: 50%;
            background-image: linear-gradient(to top, rgba(0,0,0,1), rgba(0,0,0,0));
            bottom: 0;
        }

        .jumbotron .container {
            color: white;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .jumbotron .display-4 {
            font-weight: 200;
            font-size: 2.6em;
            margin-top: 100px;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
            margin-bottom: 50px;
        }

        .jumbotron .display-4 span {
            font-weight: 500;
        }



        /* Info Panel */
        .info-panel {
            background-color: white;
            padding: 30px;
            margin-top: -120px;
            border-radius: 12px;
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.6);
        }

        .info-panel h4 {
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            text-transform: uppercase;
        }

        .info-panel p {
            font-size: 14px;
            font-weight: lighter;
            color: #acacac;
        }



        /* Workingspace */
        .workingspace {
            margin-top: 120px;
            text-align: center;
        }

        .workingspace img {
            margin-bottom: 20px;
        }

        .workingspace h2 {
            font-size: 52px;
            text-transform: uppercase;
            font-weight: 200;
        }

        .workingspace h2 span {
            font-weight: 500;
        }

        .workingspace p {
            font-size: 18px;
            color: #ACACAC;
            font-weight: 200;
        }


        /* Testimonial */
        .testimonial {
            margin-top: 130px;
        }

        .testimonial p {
            font-size: 1.4em;
            text-align: center;
            font-weight: 200;
            font-style: italic;
            margin-bottom: 30px;
        }

        .testimonial img {
            width: 80px;
            height: 80px;
            margin: 10px;
            border-radius: 50%;
            filter: grayscale(1);
        }

        .testimonial .img-main {
            width: 100px;
            height: 100px;
            margin-top: -5px;
            filter: grayscale(0);
        }

        .testimonial .info-text h5 {
            font-size: 16px;
            font-weight: bold;
        }

        .testimonial .info-text p {
            font-size: 12px;
            margin-top: -5px;
            color: #acacac;
            font-style: normal;
        }



        /* Utility */
        .tombol {
            border-radius: 40px;
            text-transform: uppercase;
        }

        /* RESPONSIVE */
        @media (min-width: 992px) {
            .navbar {
                padding-top: 20px;
            }
            
            .navbar-brand, .nav-link {
                color: white !important;
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5)
            }

            .nav-link {
                text-transform: uppercase;
                margin-right: 20px;
            }

            .nav-link:hover::after,
            .nav-link.active::after {
                content: '';
                display: block;
                border-bottom: 3px solid #0B63DC;
                margin: auto;
                margin-bottom: -8px;
                width: 50%;
                padding-top: 5px;
            }


            .jumbotron {
                margin-top: -90px;
                height: 640px;
            }

            .jumbotron .display-4 {
                font-size: 5em;
                margin-top: 150px;
            }


            .workingspace {
                text-align: left;
            }


            .testimonial p {
                font-size: 2em;
            }

        }
    </style>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <title>NgaduYuk!</title>
  </head>
  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">NgaduYuk!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#">Beranda <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Laporan</a>
            <a class="nav-item nav-link" href="#">Laporan Saya</a>
            <a class="nav-item nav-link" href="#">Tentang</a>

            @guest
            <a class="nav-item nav-link btn btn-primary text-white tombol" href="{{ route('getRegister') }}">Daftar</a>
            <a class="nav-item nav-link btn btn-primary text-white tombol" href="{{ route('getLogin') }}">Masuk</a>
            @endguest

            @auth
            <a class="nav-item nav-link btn btn-primary text-white tombol" href="#">
                {{ Auth::user()->username }}
            </a>
            @endauth

          </div>
        </div>
      </div>
    </nav>
    <!-- akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"> <span>Ayo Ngadu</span> dan <span>Menjadi lebih baik</span> Bersama Kami</h1>
        <a href="#" class="btn btn-info btn-lg tombol">LAPOR</a>
      </div>
    </div>
    <!-- akhir Jumbotron -->


    <!-- container -->
    <div class="container">

      <!-- info panel -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-sm">
              <img src="{{ asset('tmp/img/employee.png') }}" alt="Employee" class="img-fluid float-left">
              <h4>24 Hours</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-lg">
              <img src="{{ asset('tmp/img/hires.png') }}" alt="HiRes" class="img-fluid float-left">
              <h4>High-Res</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-lg">
              <img src="{{ asset('tmp/img/security.png') }}" alt="Security" class="img-fluid float-left">
              <h4>Security</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir info panel -->


      <!-- Workingspace -->
      <div class="row workingspace">
        <div class="col-lg-6">
          <img src="{{ asset('tmp/img/workingspace.png') }}" alt="Working Space" class="img-fluid">
        </div>
        <div class="col-lg-5">
          <h2>Lapor <span>Pengaduan</span> Sangat <span>Mudah</span></h2>
          <p>Bekerja dengan suasana hati yang lebih asik, menyenangkan
            dan mempelajari hal baru setiap harinya.</p>
          <a href="{{ route('laporan.user') }}" class="btn btn-danger tombol">Lapor   </a>
        </div>
      </div>
      <!-- akhir Workingspace -->


      <!-- Testimonial -->
      <section class="testimonial">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <p>"Bekerja dengan suasana hati yang lebih asik dan mempelajari hal baru setiap harinya."</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 justify-content-center d-flex">
            <img src="{{ asset('tmp/img/img1.png') }}" alt="Testimonial 1">
            <img src="{{ asset('tmp/img/img2.png') }}" alt="Testimonial 2" class="img-main">
            <img src="{{ asset('tmp/img/img3.png') }}" alt="Testimonial 3">
          </div>
        </div>
        <div class="row justify-content-center info-text">
          <div class="col-lg text-center">
            <h5>Sunny Ye</h5>
            <p>Designer</p>
          </div>
        </div>
      </section>
      <!-- akhir Testimonial -->


    </div>
    <!-- akhir container -->




    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/app.js')}}"> </script>
  </body>
</html>