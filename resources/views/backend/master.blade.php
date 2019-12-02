<!DOCTYPE html>
<html>

<head>
  <base href="{{ asset('layout/backend') }}/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') | Amazon</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <script type="text/javascript" src="../../editors/ckeditor/ckeditor.js"></script>
  <script src="js/lumino.glyphs.js"></script>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ asset('home') }}">Amazon</a>
        <ul class="user-menu">
          <li class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
              <svg class="glyph stroked male-user">
                <use xlink:href="#stroked-male-user"></use>
              </svg> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdown">
              <li class="dropdown-item">
                <a href="{{ asset('logout') }}">
                  <svg class="glyph stroked cancel">
                    <use xlink:href="#stroked-cancel"></use>
                  </svg> Logout
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </div><!-- /.container-fluid -->
  </nav>

  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
      <li role="presentation" class="divider"></li>
      <li class="active"><a href="{{ asset('dashboard/home') }}"><svg class="glyph stroked dashboard-dial">
            <use xlink:href="#stroked-dashboard-dial"></use>
          </svg> Trang chủ</a></li>
      <li><a href="{{ asset('dashboard/user') }}"><svg class="glyph stroked line-graph">
            <use xlink:href="#stroked-line-graph"></use>
          </svg> Người dùng</a></li>
      <li><a href="{{ asset('dashboard/product') }}"><svg class="glyph stroked calendar">
            <use xlink:href="#stroked-calendar"></use>
          </svg> Sách</a></li>
      <li><a href="{{ asset('dashboard/category') }}"><svg class="glyph stroked line-graph">
            <use xlink:href="#stroked-line-graph"></use>
          </svg> Danh mục sách</a></li>
      <li><a href="{{ asset('dashboard/publisher') }}"><svg class="glyph stroked calendar">
            <use xlink:href="#stroked-calendar"></use>
          </svg> Nhà xuất bản</a></li>
      <li><a href="{{ asset('dashboard/author') }}"><svg class="glyph stroked line-graph">
            <use xlink:href="#stroked-line-graph"></use>
          </svg> Tác giả</a></li>
      <li><a href="{{ asset('dashboard/order') }}"><svg class="glyph stroked line-graph">
            <use xlink:href="#stroked-line-graph"></use>
          </svg> Hoá đơn</a></li>

      <li role="presentation" class="divider"></li>
    </ul>

  </div>
  <!--/.sidebar-->
  <!-- Main -->
  @yield('main')

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script>
    $('#calendar').datepicker({});

    ! function($) {
      $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
        $(this).find('em:first').toggleClass("glyphicon-minus");
      });
      $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function() {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function() {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script>
</body>

</html>




<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script>
  $('#calendar').datepicker({});

  ! function($) {
    $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
      $(this).find('em:first').toggleClass("glyphicon-minus");
    });
    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
  }(window.jQuery);

  $(window).on('resize', function() {
    if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
  })
  $(window).on('resize', function() {
    if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
  })
</script>
</body>

</html>