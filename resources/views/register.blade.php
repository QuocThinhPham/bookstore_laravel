@extends("layout.Forms")
@section("content")

<!-- Register -->
<div class="form form-customer">
  @if(isset($info))
  <p class="alert alert-success text-center">{{$info}}</p>
  @endif
  <form action="{{url('/register')}}" method="post" class="form-horizontal">
    @csrf
    <h3>Register</h3>
    <div class="form-group">
      <label class="control-label col-lg-4">Full Name</label>
      <div class="col-lg-8">
        <input type="text" name="username" id="" class="form-control" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-4">Phone Number</label>
      <div class="col-lg-8">
        <input type="text" name="phone_number" id="" class="form-control" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-4">Email</label>
      <div class="col-lg-8">
        <input type="email" name="email" id="" class="form-control" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-4">Password</label>
      <div class="col-lg-8">
        <input type="password" name="password" id="" class="form-control" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-4">Repeat Password</label>
      <div class="col-lg-8">
        <input type="password" name="re-password" id="" class="form-control" required>
      </div>
    </div>
    <div class="form-group text-center">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </form>
</div>
<!-- End Of Register -->
@endsection