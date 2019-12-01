  <header>
    <div class="header-nav-wrapper">
      <div class="container-fluid">
        <div class="header-nav-left col-lg-1">
          <a href="{{url('/home')}}" style="text-decoration: none;">
            <div class="logo">
              <span>AMAZON</span>
            </div>
          </a>
        </div>
        <div class="nav-form col lg-5 col-lg-offset-1">
          <form action="" class="form-inline">
            <input type="text" name="search" id="" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-default">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
        <div class="header-nav-right col-lg-5">
          <!-- login part -->
          <div class="dropdown myaccount col-lg-6">
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
              <li><a href="{{url('profile')}}">Profile</a></li>
              <li><a href="{{url('logout')}}">Logout</a></li>
            </ul>
            @else
            <ul class="dropdown-menu">
              <li id="register"><a href="{{url('register')}}">Register</a></li>
              <li id="login"><a href="{{url('login')}}">Login</a></li>
            </ul>
            @endif
          </div>
          <!-- End login part -->
          <div class="header-cart col-lg-4">
            <div id="cart">
              <!-- <span class="cart-icon"></span> -->
              <a href="{{ url('shopping') }}">
                <span id="cart-title">
                  <i class="fas fa-shopping-cart"></i> my cart
                </span>
                <span class="badge" id="cart-total">{{ Session::has('cart') ? Session::get('cart')['totalAmount'] : 0}}</span>
              </a>
            </div>
          </div>
          <div class="header-cart col-lg-2">
            <div>
              <!-- <span class="cart-icon"></span> -->
              <a href="{{ asset('dashboard/login') }}">Admin</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content-header">
      <div class="container">
        <div class="main-menu" id="main-menu">
          <nav class="nav-container" role="navigation">
            <div class="nav-inner">
              <ul class="nav navbar-nav">
                <li><a href="home">home</a></li>
                <li><a href="{{asset('books')}}">books</a></li>
                <li><a href="">contact</a></li>
                <li><a href="">affiliate</a></li>
                <li><a href="">brands</a></li>
                <li><a href="">specials</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>