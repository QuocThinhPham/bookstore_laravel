@extends("layout.main")
@section('content')
        @if (count($books) > 0)
            @foreach ($books as $book)
            <div class="product-item">
              <div>
                <div class="img-product">
                    <img src="frontend/images/{{$book->Sach_img}}">
                </div>
                <div class="details-product">
                  <h3><a href="/books/{{$book->Maloai}}">{{$book->Tensach}}</a></h3>
                  <h5 class="price-product">$10</h5>
                </div>
              </div>
              <div class="button-group">
                <button class="addtocart"><i class="fas fa-cart-plus"></i></button>
                <button class="quickview"><i class="far fa-eye"></i></button>
                <button class="wishlist"><i class="far fa-heart"></i></button>
              </div>
            </div>
            <!-- <div class="product-item">
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
            </div> -->
            @endforeach
        @else
        <h3>No book found.</h3>    
    @endif

@endsection