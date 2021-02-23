<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>LOGIN </title>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="stylesheet" href="{{ url('css/style-login.css') }}">



</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <form class="login">
    <p class="title"> Ingrese sus datos</p>
    <input type="text" placeholder="Usuario" autofocus/>
    <i class="fa fa-user"></i>
    <input type="password" placeholder="Password" />
    <i class="fa fa-key"></i>
    <button>
      <i class="spinner"></i>
      <span class="state">Enviar</span>
    </button>
  </form>

  </p>
</div>
<!-- partial -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script href="../../public/assets/bootstrap/js/bootstrap.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script href="../../public/assets/bootstrap/js/bootstrap.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script  src="{{ asset('js/script_login.js') }}"></script>


</body>
</html>
