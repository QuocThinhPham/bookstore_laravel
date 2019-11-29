@extends('backend.master')
@section('title','Danh sách người dùng')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Người dùng</h1>
    </div>
  </div>
  <!--/.row-->
  <div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
      <div class="panel panel-primary">
        <div class="panel-heading">Danh sách người dùng</div>
        <div class="panel-body">
          <div class="bootstrap-table">
            <div class="table-responsive">
              <table class="table table-bordered" style="margin-top:20px;">
                <thead>
                  <tr class="bg-primary">
                    <th>ID</th>
                    <th width="30%">Tên người dùng</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($userlist as $user)
                  <tr>
                    <td>{{$user->user_id}}</td>
                    <td>{{$user->user_name}}</td>
                    <td>{{ $user->user_email }}</td>
                    <td>{{ $user->user_phone_number }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
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