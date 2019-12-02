@extends('backend.master')
@section('title','Danh sách người dùng')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Hoá đơn</h1>
    </div>
  </div>
  <!--/.row-->
  <div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
      <div class="panel panel-primary">
        <div class="panel-heading">Danh sách hoá đơn</div>
        <div class="panel-body">
          <div class="bootstrap-table">
            <div class="table-responsive">
              <table class="table table-bordered" style="margin-top:20px;">
                <thead>
                  <tr class="bg-primary">
                    <th>Số hoá đơn</th>
                    <th width="30%">Tên người dùng</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Sản phẩm</th>
                  </tr>
                </thead>
                <tbody>

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