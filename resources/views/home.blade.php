@extends("layout.master")
@include('include.header')
@section("content")
<!-- Banner -->
@if(isset($info))
  <div class="showMess" id="alert-mess">{{$info}}</div>
@endif
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
        <img src="{{('frontend/images/sachhay.jpg')}}" alt="" style=" width:100%;height: calc(80vh - 100px);">
      </div>
      <div class="item">
        <img src="{{('frontend/images/banner1.jpg')}}" alt="" style=" width:100%;height: calc(80vh - 100px);">
      </div>
      <div class="item">
        <img src="{{('frontend/images/banner1.png')}}" alt="" style=" width:100%;height: calc(80vh - 100px);">
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
<div>
</div>
<!-- Products -->

<!-- <div class="products">
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
  </div> -->
@endsection