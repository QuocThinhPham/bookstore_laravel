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
                          @foreach ($order->book as $item)
                          <li class="list-group-item">
                              <span class="badge">$ {{ $item->book_price }} </span>
                              {{ $item->book_name }} | {{ $item->pivot->amount }} quyển
                          </li>
                          @endforeach
                      </ul>
                    </div>
                    <div class="panel-footer">Tổng cộng: ${{ $order->totalPrice }}</div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
@endsection