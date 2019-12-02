<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{url('frontend/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('frontend/fontawesome/all.css')}}">
</head>

<body>

  @yield('content')

</body>
<!-- jQuery -->
<script src="{{('frontend/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{('frontend/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script src="{{('frontend/fontawesome/all.js')}}"></script>
<script src="{{('frontend/js/app.js')}}"></script>
<script src="{{('frontend/js/animation.js')}}"></script>
<script type="text/javascript">
  $('.add-cart').click(function(e) {
    e.preventDefault();
    var bookId = $(this).attr('id');
    $.ajax({
      url: window.location.origin + '/cart',
      // url: window.location.origin + '/bookstore_laravel/public/cart',
      method: 'get',
      data: {
        id: bookId
      },
      success: function(data) {
        $('#cart-total').html(data);
        // alert('Thêm vào giỏ hàng thành công.');
      },
      error: function() {
        alert('Thêm vào giỏ hàng thất bại.');
      }
    });
  });

  $()
</script>
</body>

</html>