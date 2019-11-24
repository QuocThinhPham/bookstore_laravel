@extends("layout.Forms")

@section("content")

<div class="form login">
  @if (isset($error))
    <h4 class="alert alert-danger text-center">{{ $error }}</h4>
  @endif
<form action="{{url('/login')}}" method="post" class="form-horizontal">
    @csrf
    <h3>Login</h3>
    {{ csrf_field()}}
    <div class="form-group">
      <label class="control-label col-lg-4">Email</label>
      <div class="col-lg-8">
        <input type="email" name="userEmail" id="" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-4">Password</label>
      <div class="col-lg-8">
        <input type="password" name="userPass" id="" class="form-control">
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