@extends('layout.Forms')
@section('content')
    @if(Auth::check())
    <div class="container">
            <form>
                    <div class="form-group">
                        <label for="address">Giio đến địa chỉ này</label>
                        <input type="text" class="form-control" id="address"  placeholder="Địa chỉ">
                    </div>
                    <div class="form-group">
                        <label for="phone-num">Password</label>
                        <input type="password" class="form-control" id="phone-num" placeholder="Số điện thoại">
                    </div>
                    <button type="submit" class="btn btn-primary">Đặt Mua</button>
                </form>
    </div>
    @else
    {{ redirect('/login') }}
    @endif
@endsection