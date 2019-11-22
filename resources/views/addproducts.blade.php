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