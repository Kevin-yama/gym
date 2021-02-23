<!doctype html>

<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GYM </title>
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- llamada al archi local -->
    <link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


	<!-- llamada del css del navbar -->

  <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">


</head>
<body>

<!-- <a href="#" class="scrollToTop btn text-uppercase btn-outline-danger btn-lg mr-2 mb-2  " style="display: inline; padding-left: 12px;
    padding-top: 6px;"> &#9650; </a> -->
<div  id="home" class="container-fluid pl-0 pr-0 bg-img clearfix parallax-window2" data-parallax="scroll" data-image-src="{{ asset('images/banner2.jpg')}}">


<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container">
      <!-- Brand -->
      <a class="navbar-brand mr-auto" href="#"><img src=" {{ asset('images/logo_nav.png')}}" alt="FoxPro" style="width: 200px; height: 100px;" /></a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="/home">Home</a> </li>
          <!-- <li class="nav-item"> <a class="nav-link" href="#Entrenamiento">ENTRENAMIENTO</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#ejercicios">EJERCICIOS </a> </li>
          <li class="nav-item"> <a class="nav-link" href="#dietas">   DIETAS </a> </li>           -->
        </ul>
        <ul class="navbar-nav ml-5">
          <li class="nav-item"> <a class="nav-link btn btn-danger fa fa-sign-in" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

@yield('content')

<!--  footer  -->
<!-- <footer class="container-fluid">
@include('partials.footer')
</footer> -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Bootstrap JS, ... -->
    <script href=" ../../public/assets/bootstrap/js/bootstrap.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script href="../../public/assets/bootstrap/js/bootstrap.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script> -->



    <!-- <script src="js/jquery.min.js"></script> -->


	<script  src="{{ asset('js/jquery.min.js') }}"></script>
	<script  src="{{ asset('js/parallax.js') }}"></script>
	<script  src="{{ asset('js/wow.js') }}"></script>
	<script  src="{{ asset('js/main.js') }}"></script>


</body>
</html>
