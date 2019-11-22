@extends("layout.Forms")
@section("content")

<!-- Register -->
<div class="form form-customer">
  <form action="" method="get" class="form-horizontal">
    <h3>Register</h3>
    <div class="form-group">
      <label class="control-label col-lg-4">Full Name</label>
      <div class="col-lg-8">
        <input type="text" name="username" id="" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-4">Phone Number</label>
      <div class="col-lg-8">
        <input type="number" name="phone-number" id="" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-4">Date Of Birth</label>
      <div class="col-lg-8">
        <input type="date" name="bỉthday" id="" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-4">Address</label>
      <div class="col-lg-8">
        <input type="text" name="address" id="" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-4">Password</label>
      <div class="col-lg-8">
        <input type="password" name="password" id="" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-4">Repeat Password</label>
      <div class="col-lg-8">
        <input type="password" name="re-password" id="" class="form-control">
      </div>
    </div>
    <div class="form-group text-center">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </form>
</div>
<!-- End Of Register -->
@endsection