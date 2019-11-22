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
  <header>
    <div class="header-nav-wrapper">
      <div class="container">
        <div class="header-nav-left col-lg-2">
          <div class="logo">
            <span>T</span>
            <span>N</span>
            <span>T</span>
          </div>
        </div>
        <div class="header-nav-right col-lg-4 col-lg-offset-6">
          <div class="dropdown myaccount col-lg-6">
            <a class="dropdown-toggle" data-toggle="dropdown">
              <span class="user-info-image">
                <i class="far fa-user"></i> my account
              </span>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li id="register"><a href="register">Register</a></li>
              <li id="login"><a href="login">Login</a></li>
            </ul>
          </div>
          <div class="header-cart col-lg-6">
            <div id="cart">
              <!-- <span class="cart-icon"></span> -->
              <a>
                <span id="cart-title">
                  <i class="fas fa-shopping-cart"></i> my cart
                </span>
                <span id="cart-total">(0)</span>
              </a>
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
                <li><a href="">blog</a></li>
                <li><a href="">contact</a></li>
                <li><a href="">affiliate</a></li>
                <li><a href="">brands</a></li>
                <li><a href="">specials</a></li>
                <li><a href="">my account</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>