@extends("layout.Forms")

@section("content")
<div class="form login">
  <form action="{{url('login-form')}}" method="post" class="form-horiz}}ontal">
    <h3>Login</h3>
    {{ csrf_field()}}
    <div class="form-group">
      <label class="control-label col-lg-4">Username</label>
      <div class="col-lg-8">
        <input type="text" name="username" id="" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-4">Password</label>
      <div class="col-lg-8">
        <input type="password" name="password" id="" class="form-control">
      </div>
    </div>
    <div class="form-group text-center">
      <button type="submit" class="btn btn-primary">Login</button>
    </div>
    @if(isset($error))
    <h1>{{ $error }}</h1>
    @endif
  </form>
</div>
@endsection