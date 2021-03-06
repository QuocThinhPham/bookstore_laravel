@extends('backend.master')
@section('title','Sửa danh mục')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Danh sách nhà xuất bản</h1>
    </div>
  </div>
  <!--/.row-->

  <div class="row">
    <div class="col-xs-12 col-md-5 col-lg-5">
      <div class="panel panel-primary">
        <div class="panel-heading">
          Sửa nhà xuất bản
        </div>
        <div class="panel-body">
          @include('errors.note')
          <form action="" method="post">
            <div class="form-group">
              <label>Tên nhà xuất bản:</label>
              <input type="text" name="name" class="form-control" placeholder="Tên nhà xuất bản..." value="{{ $publisher->publisher_name }}">
            </div>
            <div class="form-group">
              <input type="submit" name="submit" class="form-control btn btn-primary" value="Sửa">
            </div>
            <div class="form-group">
              <a href="{{ asset('dashboard/publisher') }}" class="form-control btn btn-danger">Huỷ bỏ</a>
            </div>
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--/.row-->
</div>
<!--/.main-->
@endsection