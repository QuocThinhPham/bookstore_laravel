@extends('layout.master')
@include('include.header')
@section('content')
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
                                <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{ asset('../storage/app/avatar/'.$book['item']['book_img']) }}" style="width: 72px; height: 72px;"> </a>
                                <div class="media-body text-left">
                                    <h4 class="media-heading"><a href="#">{{ $book['item']['book_name'] }}</a></h4>
                                    <h5 class="media-heading">Tác Giả: <a href="#">{{ $book['item']['author']['author_name']}}</a></h5>
                                    {{-- <span>Status: </span><span class="text-success"><strong>In Stock</strong></span> --}}
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center">
                            <input type="number" class="form-control" value="{{ $book['amount'] }}" required>
                        </td>
                        <td class="col-sm-2 col-md-2 text-center"><strong>{{ number_format($book['item']['book_price'],0,',','.') }} VNĐ</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{ number_format($book['item']['book_price'] * $book['amount'],0,',','.') }} VNĐ<strong></td>
                        <td class="col-sm-1 col-md-1">
                            <a href="/remove-cart/{{ $book['item']['book_id'] }}">
                                <button type="button" class="btn btn-danger" class="btn-del" id="{{ $book['item']['book_id'] }}">
                                    Remove
                                </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                            <h3 class="text-center">Total</h3>
                        </td>
                        <td class="text-right">
                            <h3><strong>{{ number_format($totalPrice,0,',','.') }} VNĐ</strong></h3>
                        </td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                            <a href="{{ asset('books') }}">
                                <button type="button" class="btn btn-default">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Tiếp tục mua sắm
                                </button>
                            </a>
                        </td>
                        <td>
                            <a href="{{asset('checkout')}}" style="text-decoration: none;">
                                <button type="button" class="btn btn-success">
                                    Checkout
                                </button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @else
    <div class="row text-center">
        <h2 class="alert alert-info">Không có mặt hàng nào trong giỏ</h2>
        <a href="{{ asset('books') }}" class="btn btn-primary">Mua hàng</a>
    </div>
    @endif
</div>