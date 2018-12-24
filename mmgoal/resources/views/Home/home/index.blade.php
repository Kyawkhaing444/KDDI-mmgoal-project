<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Home</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">

  <link href="{{asset('css/libs.css')}}" rel="stylesheet">
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
        .nav-color{
background-color: rgba(0, 0, 0, 0);
border-color: rgba(0, 0, 0, 0);

        }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar nav-color z-depth-0" >
    <div class="container">

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="#" class="nav-link border border-light rounded-circle  z-depth-2"
              style="background-color: seashell;"
              target="_blank">
              <i class="fas fa-bars"></i>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-1z" data-slide-to="1"></li>
          <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

          <!--First slide-->
          <div class="carousel-item active">
  <div class="view" style="background-image: url('images/sample.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="text-center white-text mx-5 wow fadeIn">
        <h1 class="mb-4">
          <strong></strong>
        </h1>

        <p>
          <strong></strong>
        </p>

        <p class="mb-4 d-none d-md-block">
          <strong></strong>
        </p>
      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->
  </div>
          </div>

  <div class="carousel-item">
        <div class="view" style="background-image: url('images/sample.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong></strong>
              </h1>

              <p>
                <strong></strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong></strong>
              </p>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>

      <div class="carousel-item">
            <div class="view" style="background-image: url('images/sample.jpg'); background-repeat: no-repeat; background-size: cover;">

              <!-- Mask & flexbox options-->
              <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                <!-- Content -->
                <div class="text-center white-text mx-5 wow fadeIn">
                  <h1 class="mb-4">
                    <strong></strong>
                  </h1>

                  <p>
                    <strong></strong>
                  </p>

                  <p class="mb-4 d-none d-md-block">
                    <strong></strong>
                  </p>
                </div>
                <!-- Content -->

              </div>
              <!-- Mask & flexbox options-->

            </div>
          </div>

          </div>
        </div>
  </div>
  <!-- Full Page Intro -->


  <script src="{{asset('js/libs.js')}}"></script>
</body>

</html>
