@extends('backend.master')
@section('title','Tác giả')

@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Danh sách tác giả</h1>
    </div>
  </div>
  <!--/.row-->

  <div class="row">
    <div class="col-xs-12 col-md-5 col-lg-5">
      <div class="panel panel-primary">
        <div class="panel-heading">
          Thêm tác giả
        </div>
        <div class="panel-body">
          @include('errors.note')
          <form action="" method="post">
            <div class="form-group">
              <label>Tên tác giả:</label>
              <input required type="text" name="name" class="form-control" placeholder="Tên tác giả..." autocomplete="off">
            </div>
            <div class="form-group">
              <input type="submit" name="submit" placeholder="Tên tác giả..." value="Thêm mới" class="form-control btn btn-primary">
            </div>
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-7 col-lg-7">
      <div class="panel panel-primary">
        <div class="panel-heading">Danh sách tác giả</div>
        <div class="panel-body">
          <div class="bootstrap-table">
            <table class="table table-bordered">
              <thead>
                <tr class="bg-primary">
                  <th>Tên tác giả</th>
                  <th style="width:30%">Tùy chọn</th>
                </tr>
              </thead>
              <tbody>
                @foreach($authorlist as $author)
                <tr>
                  <td>{{ $author->author_name }}</td>
                  <td>
                    <a href="{{ asset('dashboard/author/edit/'.$author->author_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                    <a href="{{ asset('dashboard/author/delete/'.$author->author_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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