@extends('layout.Forms')
@section('content')
    {{-- @if (Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach ($books as $book)
                        <li class="list-group-item">
                            <span class="badge"> {{ $book['amount'] }} </span>
                        <strong>{{ $book['item']['book_name']}}</strong>
                        <span class="label label-success"> {{ $book['item']['book_price'] }} </span>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toogle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Reduce by 1</a></li>
                                <li><a href="#">Reduce All</a></li>
                            </ul>
                        </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h4>Tổng Tiền: {{ $totalPrice }}</h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <button type="button" class="btn btn-success">Thanh Toán    </button>
            </div>
        </div>
        
    @else
        
    @endif --}}
    <div class="container">
        @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table table-hover">
                   
                   <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td class="col-sm-8 col-md-6">
                            <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="/frontend/images/{{ $book['item']['book_img'] }}" style="width: 72px; height: 72px;"> </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">{{ $book['item']['book_name'] }}</a></h4>
                                <h5 class="media-heading"> Tác Giả: <a href="#">{{ $book['item']['author']['author_name']}}</a></h5>
                                    {{-- <span>Status: </span><span class="text-success"><strong>In Stock</strong></span> --}}
                                </div>
                            </div></td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                            <input type="number" class="form-control" value="{{ $book['amount'] }}" required>
                            </td> 
                            <td class="col-sm-1 col-md-1 text-center"><strong>${{ $book['item']['book_price'] }}</strong></td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>${{ $book['item']['book_price'] * $book['amount'] }}</strong></td>
                            <td class="col-sm-1 col-md-1">
                            <button type="button" class="btn btn-danger">
                                Remove
                            </button></td>
                        </tr>
                        @endforeach
                        
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td><h3>Total</h3></td>
                            <td class="text-right"><h3><strong>${{ $totalPrice }}</strong></h3></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                            <button type="button" class="btn btn-default">
                                <a href="/books"><span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping</a>
                            </button></td>
                            <td>
                            <button type="button" class="btn btn-success">
                                <a href="/checkout">Checkout</a> 
                            </button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <h2>Không có măt hàng nào trong giỏ</h2>
            </div>
        </div>
        @endif
    </div>
@endsection