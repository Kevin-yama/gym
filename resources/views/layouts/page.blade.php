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
<nav class="navbar navbar-inverse" style="padding-left: 15%;padding-right: 20%;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="{{ asset('images/logo_nav.png')}}" style="width: 200px; height: 100px;" alt="">  </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/home">Home</a></li>      
    </ul>
    <ul class="nav navbar-nav navbar-center">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <img src="{{ asset('images/salir1.png')}}" style="width: 200px; height: 100px;" alt=""></a></li>
      
    </ul>
  </div>
</nav>



@yield('content')









    <script href=" ../../public/assets/bootstrap/js/bootstrap.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script href="../../public/assets/bootstrap/js/bootstrap.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script  src="{{ asset('js/jquery.min.js') }}"></script>
	<script  src="{{ asset('js/parallax.js') }}"></script>
	<script  src="{{ asset('js/wow.js') }}"></script>
	<script  src="{{ asset('js/main.js') }}"></script>
    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script> -->
    <!-- <script src="js/jquery.min.js"></script> -->


</body>
</html>
