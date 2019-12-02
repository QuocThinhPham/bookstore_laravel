@extends('layout.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>My Order</h1>
                @foreach($orders as $order)
                <div class="panel panel-default">
                    <div class="panel-body">
                      <ul class="list-group">
                          @foreach ($order->cart->items as $item)
                          <li class="list-group-item">
                              <span class="badge">$ {{ $item['price'] }} </span>
                              {{ $item['item']['book_name'] }} | {{ $item['amount'] }} quyển
                          </li>
                          @endforeach
                      </ul>
                    </div>
                    <div class="panel-footer">Total ${{ $order->cart->totalPrice }}</div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
@endsection