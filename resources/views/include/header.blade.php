  <header>
    <div class="header-nav-wrapper">
      <div class="container-fluid">
        <div class="header-nav-left col-lg-2 col-md-2">
          <a href="{{url('/home')}}" style="text-decoration: none;">
            <div class="logo">
              <span>AMAZON</span>
            </div>
          </a>
        </div>
        <div class="nav-form col-lg-3 col-md-3 col-lg-offset-2 col-md-offset-2">
          <form action="" class="form-inline">
            <div class="form-group">
              <input type="text" name="search" id="" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
        <div class="header-nav-right col-lg-7 col-md-7 col-lg-offset-3">

          <div class="header-cart col-lg-2 col-md-2">
            <div id="cart">
              <!-- <span class="cart-icon"></span> -->
              <a href="{{ url('shopping') }}">
                <span id="cart-title">
                  <i class="fas fa-shopping-cart"></i>
                </span>
                <span class="badge" id="cart-total">{{ Session::has('cart') ? Session::get('cart')['totalAmount'] : 0}}</span>
              </a>
            </div>
          </div>
          <!-- login part -->
          <div class="dropdown myaccount col-lg-7 col-md-7 col-lg-offset-2">
            <a class="dropdown-toggle" data-toggle="dropdown">
              <span class="user-info-image">
                @if (Auth::check())
                <i class="far fa-user"></i>{{Auth::user() -> user_name}}
                @else
                <i class="far fa-user"></i>My Acount
                @endif
              </span>
              <span class="caret"></span>
            </a>
            @if(isset(Auth::user()->user_email))
            <ul class="dropdown-menu">
              @if(Auth::user()->is_admin)
              <li><a href="{{url('dashboard')}}">Dashboard</a></li>
              @endif
              <li><a href="{{url('profile')}}">Hoá đơn</a></li>
              <li><a href="{{url('logout')}}">Dăng xuất</a></li>
            </ul>
            @else
            <ul class="dropdown-menu">
              <li id="register"><a href="{{url('register')}}">Đăng ký</a></li>
              <li id="login"><a href="{{url('login')}}">Đăng nhập</a></li>
            </ul>
            @endif
          </div>
          <!-- End login part -->
        </div>
      </div>
    </div>
    <div class="content-header">
      <div class="container">
        <div class="main-menu" id="main-menu">
          <nav class="nav-container" role="navigation">
            <div class="nav-inner">
              <ul class="nav navbar-nav">
                <li><a href="{{ asset('home') }}">home</a></li>
                <li><a href="{{asset('books')}}">books</a></li>
                <li><a href="{{asset('category')}}">Categories</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>