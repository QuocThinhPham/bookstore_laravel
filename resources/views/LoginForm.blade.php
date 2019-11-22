@extends("layout.Forms")

@section("content")
<div class="form login">
  <form action="" method="post" class="form-horizontal">
    <h3>Login</h3>
    <div class="form-group">
      <label class="control-label col-lg-4">Username</label>
      <div class="col-lg-8">
        <input type="text" name="username" id="" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-4">Password</label>
      <div class="col-lg-8">
        <input type="number" name="phone-number" id="" class="form-control">
      </div>
    </div>
    <div class="form-group text-center">
      <button type="submit" class="btn btn-primary">Login</button>
    </div>
  </form>
</div>
@endsection