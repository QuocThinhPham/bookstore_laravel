<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{('frontend/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{('frontend/fontawesome/all.css')}}">
</head>

<style>
  div.form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 35%;
    padding: 1rem 1.5rem;
    border: 1px solid #000;
  }

  div.form h3 {
    text-align: center;
    font-size: 2em;
    font-weight: bold;
    padding: 0.2rem 2rem;
  }

  .showForm {
    display: block !important;
  }

  div.form .form-group .control-label {
    font-size: 1.6rem;
    font-weight: normal;
    text-align: center;
  }

  .btn.btn-primary {
    font-size: 1.7rem;
  }
</style>

<body>
  <button class="btn btn-default" id="sp">Sản phẩm</button>
  <button class="btn btn-default" id="loai">Loại</button>
  <button class="btn btn-default" id="register">Register</button>

  <div class="form form-sp" style="display: none;">
    <form class="form-horizontal" action="" method="get">
      <h3>Thêm sản phẩm</h3>
      <div class="form-group">
        <label class="control-label col-lg-3">Mã sản phẩm</label>
        <div class="col-lg-9">
          <input type="text" name="" id="" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-3">Tên sản phẩm</label>
        <div class="col-lg-9">
          <input type="text" name="" id="" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-3">Số lượng</label>
        <div class="col-lg-9">
          <input type="number" name="" id="" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-3">Mã loại</label>
        <div class="col-lg-9">
          <input type="text" name="" id="" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-3">Giá</label>
        <div class="col-lg-9">
          <input type="number" name="" id="" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-12 text-center">
          <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
          <button type="reset" class="btn btn-primary">Reset</button>
        </div>
      </div>
    </form>
  </div>
  <div class="form form-loai" style="display: none;">
    <form class="form-horizontal" action="" method="get">
      <h3>Thêm loại sản phẩm</h3>
      <div class="form-group">
        <label class="control-label col-lg-3">Mã loại</label>
        <div class="col-lg-9">
          <input type="text" name="categoryCode" id="" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-3">Tên loại</label>
        <div class="col-lg-9">
          <input type="text" name="categoryName" id="" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-12 text-center">
          <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
          <button type="reset" class="btn btn-primary">Reset</button>
        </div>
      </div>
    </form>
  </div>
  <!-- Custumer Form -->
  <div class="form form-customer" style="display: none;">
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

  <!-- jQuery -->
  <script src="{{('frontend/js/jquery-3.4.1.min.js')}}"></script>

  <script src="{{('frontend/fontawesome/all.js')}}"></script>
  <!-- Bootstrap JS -->
  <script src="{{('frontend//bootstrap/dist/js/bootstrap.min.js')}}"></script>

  <script>
    const spBtn = document.querySelector("#sp");
    const loaiBtn = document.querySelector("#loai");
    const registerBtn = document.querySelector("#register");
    const spForm = document.querySelector(".form-sp");
    const loaiForm = document.querySelector(".form-loai");
    const registerForm = document.querySelector(".form-customer");

    spBtn.addEventListener("click", () => {
      spForm.classList.toggle("showForm");
      loaiForm.classList.remove("showForm");
      registerForm.classList.remove("showForm");
    });
    loaiBtn.addEventListener("click", () => {
      spForm.classList.remove("showForm");
      loaiForm.classList.toggle("showForm");
      registerForm.classList.remove("showForm");
    });
    registerBtn.addEventListener("click", () => {
      spForm.classList.remove("showForm");
      loaiForm.classList.remove("showForm");
      registerForm.classList.toggle("showForm");
    })
  </script>
</body>

</html>