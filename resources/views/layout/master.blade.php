<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{('frontend/css/style.css')}}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{('frontend/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{('frontend/fontawesome/all.css')}}">
</head>

<body>

  @yield('content')

</body>
<!-- End Of Footer -->
<!-- jQuery -->
<script src="{{('frontend/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{('frontend/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script src="{{('frontend/fontawesome/all.js')}}"></script>
<script src="{{('frontend/js/app.js')}}"></script>
</body>

</html>