@extends("layout.master")
@section("content")

@if(isset($info))
    <div class="hideMess" id="alert-mess">
      <h3>Đăng ký thành công đăng nhập nào.</h3>
    </div>
@endif
<!-- Register -->
<div class="form form-customer">
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
      <label class="control-label col-lg-4">Address</label>
      <div class="col-lg-8">
        <input type="text" name="address" id="" class="form-control" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-4">Password</label>
      <div class="col-lg-8">
        <input type="password" name="password" id="password" class="form-control" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-4">Repeat Password</label>
      <div class="col-lg-8">
        <input type="password" name="re-password" id="confirm_passwords" class="form-control" required>
      </div>
    </div>
    <div class="form-group text-center">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </form>
</div>
<!-- End Of Register -->
@endsection