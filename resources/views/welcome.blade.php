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
                            <li id="register"><a href="">Register</a></li>
                            <li id="login"><a href="">Login</a></li>
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
                                <li><a href="">home</a></li>
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
    <div class="container-fluid common-home">
        <!-- Menu Category -->
        <div class="column-left">
            <div class="category">
                <div class="category-heading">
                    Shop by Categories <span class="glyphicon glyphicon-align-justify"></span>
                </div>
                <div class="category-content">
                    <ul id="category-menu">
                        <li class="dropdown">
                            <a href="" class="dropdown-btn">
                                <label for="">our store</label> <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="">
                                <label for="">browse by genre</label> <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </li>
                        </li>
                        <li class="dropdown">
                            <a href="">
                                <label for="">online education</label> <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </li>
                        </li>
                        <li class="dropdown">
                            <a href="">
                                <label for="">top exams</label> <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </li>
                        </li>
                        <li class="dropdown">
                            <a href=""><label for="">school education</label></a>
                        </li>
                        </li>
                        <li class="dropdown">
                            <a href=""><label for="">children & young adults</label></a>
                        </li>
                        </li>
                        <li class="dropdown">
                            <a href=""><label for="">non-fiction</label></a>
                        </li>
                        </li>
                        <li class="dropdown">
                            <a href=""><label for="">business books</label></a>
                        </li>
                        <li class="dropdown">
                            <a href=""><label for="">health & fitness</label></a>
                        </li>
                        <li class="dropdown">
                            <a href="">
                                <label for="">more</label> <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Of Menu Category -->
        <!-- Banner -->
        <div class="container column-right">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%;height: calc(80vh - 100px);">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{('frontend/images/banner-1.jpg')}}" alt="" style=" width:100%;height: calc(80vh - 100px);">
                    </div>
                    <div class="item">
                        <img src="{{('frontend/images/banner-3.jpg')}}" alt="" style=" width:100%;height: calc(80vh - 100px);">
                    </div>
                    <div class="item">
                        <img src="{{('frontend/images/banner-3.jpg')}}" alt="" style=" width:100%;height: calc(80vh - 100px);">
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- End Of Banner -->
    <!-- Products -->
    <div class="products">
        <div class="container">
            <div class="products-center">
                <div class="product-tab box">
                    <div class="title-wrapper">
                        <div class="box-heading">
                            <h3>most popular</h3>
                        </div>
                        <div class="controls clickable">
                            <div class="controls-btn">
                                <a class="prev"><i class="fas fa-arrow-left"></i></a>
                                <a class="next"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div>
                            <div class="product-item">
                                <div>
                                    <div class="img-product">
                                        <img src="{{('frontend/images/products/product-1.jpg')}}" alt="">
                                    </div>
                                    <div class="details-product">
                                        <h4 class="title-product">the cleaner</h4>
                                        <h5 class="price-product">$10</h5>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <button class="addtocart"><i class="fas fa-cart-plus"></i></button>
                                    <button class="quickview"><i class="far fa-eye"></i></button>
                                    <button class="wishlist"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="product-item">
                                <div>
                                    <div class="img-product">
                                        <img src="{{('frontend/images/products/product-1.jpg')}}" alt="">
                                    </div>
                                    <div class="details-product">
                                        <h4 class="title-product">the cleaner</h4>
                                        <h5 class="price-product">$10</h5>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <button class="addtocart"><i class="fas fa-cart-plus"></i></button>
                                    <button class="quickview"><i class="far fa-eye"></i></button>
                                    <button class="wishlist"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="product-item">
                                <div>
                                    <div class="img-product">
                                        <img src="{{('frontend/images/products/product-1.jpg')}}" alt="">
                                    </div>
                                    <div class="details-product">
                                        <h4 class="title-product">the cleaner</h4>
                                        <h5 class="price-product">$10</h5>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <button class="addtocart"><i class="fas fa-cart-plus"></i></button>
                                    <button class="quickview"><i class="far fa-eye"></i></button>
                                    <button class="wishlist"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="product-item">
                                <div>
                                    <div class="img-product">
                                        <img src="{{('frontend/images/products/product-1.jpg')}}" alt="">
                                    </div>
                                    <div class="details-product">
                                        <h4 class="title-product">the cleaner</h4>
                                        <h5 class="price-product">$10</h5>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <button class="addtocart"><i class="fas fa-cart-plus"></i></button>
                                    <button class="quickview"><i class="far fa-eye"></i></button>
                                    <button class="wishlist"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="product-item">
                                <div>
                                    <div class="img-product">
                                        <img src="{{('frontend/images/products/product-1.jpg')}}" alt="">
                                    </div>
                                    <div class="details-product">
                                        <h4 class="title-product">the cleaner</h4>
                                        <h5 class="price-product">$10</h5>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <button class="addtocart"><i class="fas fa-cart-plus"></i></button>
                                    <button class="quickview"><i class="far fa-eye"></i></button>
                                    <button class="wishlist"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab box">
                    <div class="title-wrapper">
                        <div class="box-heading">
                            <h3>collection</h3>
                        </div>
                        <div class="controls clickable">
                            <div class="controls-btn">
                                <a class="prev"><i class="fas fa-arrow-left"></i></a>
                                <a class="next"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div>
                            <div class="product-item">
                                <div>
                                    <div class="img-product">
                                        <img src="{{('frontend/images/products/product-1.jpg')}}" alt="">
                                    </div>
                                    <div class="details-product">
                                        <h4 class="title-product">the cleaner</h4>
                                        <h5 class="price-product">$10</h5>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <button class="addtocart"><i class="fas fa-cart-plus"></i></button>
                                    <button class="quickview"><i class="far fa-eye"></i></button>
                                    <button class="wishlist"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="product-item">
                                <div>
                                    <div class="img-product">
                                        <img src="{{('frontend/images/products/product-1.jpg')}}" alt="">
                                    </div>
                                    <div class="details-product">
                                        <h4 class="title-product">the cleaner</h4>
                                        <h5 class="price-product">$10</h5>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <button class="addtocart"><i class="fas fa-cart-plus"></i></button>
                                    <button class="quickview"><i class="far fa-eye"></i></button>
                                    <button class="wishlist"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="product-item">
                                <div>
                                    <div class="img-product">
                                        <img src="{{('frontend/images/products/product-1.jpg')}}" alt="">
                                    </div>
                                    <div class="details-product">
                                        <h4 class="title-product">the cleaner</h4>
                                        <h5 class="price-product">$10</h5>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <button class="addtocart"><i class="fas fa-cart-plus"></i></button>
                                    <button class="quickview"><i class="far fa-eye"></i></button>
                                    <button class="wishlist"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="product-item">
                                <div>
                                    <div class="img-product">
                                        <img src="{{('frontend/images/products/product-1.jpg')}}" alt="">
                                    </div>
                                    <div class="details-product">
                                        <h4 class="title-product">the cleaner</h4>
                                        <h5 class="price-product">$10</h5>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <button class="addtocart"><i class="fas fa-cart-plus"></i></button>
                                    <button class="quickview"><i class="far fa-eye"></i></button>
                                    <button class="wishlist"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="product-item">
                                <div>
                                    <div class="img-product">
                                        <img src="{{('frontend/images/products/product-1.jpg')}}" alt="">
                                    </div>
                                    <div class="details-product">
                                        <h4 class="title-product">the cleaner</h4>
                                        <h5 class="price-product">$10</h5>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <button class="addtocart"><i class="fas fa-cart-plus"></i></button>
                                    <button class="quickview"><i class="far fa-eye"></i></button>
                                    <button class="wishlist"><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Products -->
    <!-- Footer -->
    <footer class="footer container-fluid">
        <div class="row">
            <div class="about col-lg-3">
                <h3>about us</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, ipsum placeat. Earum explicabo quae molestias minima culpa aliquam quas fugiat?</p>
                <ul>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                    <li><i class="fab fa-youtube"></i></li>
                    <li><i class="fab fa-google-plus-g"></i></li>
                </ul>
            </div>
            <div class="contact col-lg-3">
                <h3>contact us</h3>
                <ul>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>111, puffin street, new york, 12354
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>1-212-98765432
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>Support@Company.Com</li>
                </ul>
            </div>
            <div class="info col-lg-2">
                <h3>information</h3>
                <ul>
                    <li>about us</li>
                    <li>delivery information</li>
                    <li>privacy & policy</li>
                    <li>term & conditions</li>
                    <li>site map</li>
                </ul>
            </div>
            <div class="my-account col-lg-2">
                <h3>my account</h3>
                <ul>
                    <li>brands</li>
                    <li>gift certificates</li>
                    <li>affiliates</li>
                    <li>site map</li>
                    <li>specials</li>
                </ul>
            </div>
            <div class="extras col-lg-2">
                <h3>extras</h3>
                <ul>
                    <li>specials</li>
                    <li>brands</li>
                    <li>gift certificates</li>
                    <li>affiliates</li>
                    <li>my account</li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- End Of Footer -->

    <!-- jQuery -->
    <script src="{{('frontend/js/jquery-3.4.1.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{('frontend/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <script src="{{('frontend/fontawesome/all.js')}}"></script>
    <script src="{{('frontend/js/app.js')}}"></script>
</body>

</html>