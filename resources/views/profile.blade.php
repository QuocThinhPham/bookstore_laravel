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
<<<<<<< HEAD
                          @foreach ($order->cart->items as $item)
                          <li class="list-group-item">
                              <span class="badge">$ {{ $item['price'] }} </span>
                              {{ $item['item']['book_name'] }} | {{ $item['amount'] }} quyển
=======
                          @foreach ($order->book as $item)
                          <li class="list-group-item">
                              <span class="badge">$ {{ $item->book_price }} </span>
                              {{ $item->book_name }} | {{ $item->pivot->amount }} quyển
>>>>>>> 3c69d6e2e67e5836f696a26aeef8d3a5937c48c5
                          </li>
                          @endforeach
                      </ul>
                    </div>
<<<<<<< HEAD
                    <div class="panel-footer">Total ${{ $order->cart->totalPrice }}</div>
=======
                    <div class="panel-footer">Tổng cộng: ${{ $order->totalPrice }}</div>
>>>>>>> 3c69d6e2e67e5836f696a26aeef8d3a5937c48c5
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
@endsection