@extends("layout.master")
@include('include.header')
@section('content')
<div class="product container">
  <div class="row">
    @if (count($books) > 0)
    @foreach ($books as $book)
    <div class="product-item col-lg-3 col-md-3">
      <div>
        <div class="img-product">
          <img src="{{asset('frontend/images/'.$book->book_img)}}">
        </div>
        <div class="details-product">
          <h3><a href="{{ 'books/'.$book->book_id }}">{{ $book->book_name }}</a></h3>
          <h5 class="price-product">{{ number_format($book->book_price,0,',','.') }} VNĐ</h5>
        </div>
      </div>
      <div class="button-group text-center">
        <button href="{{ 'cart/'. $book->book_id }}" class="add-cart btn btn-primary btn-xs" id="{{ $book->book_id }}"><i class="fas fa-cart-plus"></i> Mua</button>
        <button class="quickview btn btn-primary btn-xs"><i class="far fa-eye"></i> Chi tiết</button>
      </div>
    </div>
    @endforeach
    @else
    <h3 class="alert alert-danger text-center">No book found.</h3>
    @endif
  </div>
</div>
@endsection