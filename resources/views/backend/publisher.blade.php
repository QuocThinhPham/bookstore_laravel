@extends('backend.master')
@section('title','Nhà xuất bản')

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
          Thêm nhà xuất bản
        </div>
        <div class="panel-body">
          @include('errors.note')
          <form action="" method="post">
            <div class="form-group">
              <label>Tên nhà xuất bản:</label>
              <input required type="text" name="name" class="form-control" placeholder="Tên nhà xuất bản..." autocomplete="off">
            </div>
            <div class="form-group">
              <input type="submit" name="submit" placeholder="Tên danh mục..." value="Thêm mới" class="form-control btn btn-primary">
            </div>
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-7 col-lg-7">
      <div class="panel panel-primary">
        <div class="panel-heading">Danh sách nhà xuất bản</div>
        <div class="panel-body">
          <div class="bootstrap-table">
            <table class="table table-bordered">
              <thead>
                <tr class="bg-primary">
                  <th>Tên nhà xuất bản</th>
                  <th style="width:30%">Tùy chọn</th>
                </tr>
              </thead>
              <tbody>
                @foreach($publisherlist as $publisher)
                <tr>
                  <td>{{ $publisher->publisher_name }}</td>
                  <td>
                    <a href="{{ asset('dashboard/publisher/edit/'.$publisher->publisher_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                    <a href="{{ asset('dashboard/publisher/delete/'.$publisher->publisher_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <!--/.row-->
</div>
<!--/.main-->
@endsection