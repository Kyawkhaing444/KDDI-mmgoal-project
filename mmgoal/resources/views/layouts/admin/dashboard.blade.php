<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin dashboard</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">

  <link href="{{asset('css/libs.css')}}" rel="stylesheet">
  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
  </style>
</head>

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link waves-effect" href="#" target="_blank"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link waves-effect" href="#" target="_blank"><i class="fas fa-sign-out-alt"></i> LogOut</a>
                </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

      <a class="waves-effect" style="font-size: 32px ; margin-top: 8px; margin-bottom: 15px; ">
        {{--  <img src="" class="img-fluid" alt="">  --}}
        <span style="color:#FF8800;font-weight: 1000;">Admin</span><span style="color:#304ffe;font-weight: 1000;"> Panel</span>
      </a>

      <div class="list-group list-group-flush">
        <a href="dashboard" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="student" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Student</a>
        <a href="magazine" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Magazine</a>
        <a href="q&a" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-map mr-3"></i>Q&A</a>
        <a href="event" class="list-group-item list-group-item-action waves-effect">
                <i class="far fa-calendar-alt mr-3"></i></i>Event</a>
          <a href="group" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-star-of-david mr-3"></i>Group</a>
        <a href="chat" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-comments mr-3"></i>Chat</a>
        <a href="admin" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-smile mr-3"></i></i>Admin</a>
      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

 @yield('content')

  <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="" style="margin-top: 135px;">
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="" >

    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2018 Copyright:
      <a href="#" target="_blank">  </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
  <script src="{{asset('js/libs.js')}}"></script>
</body>

</html>
