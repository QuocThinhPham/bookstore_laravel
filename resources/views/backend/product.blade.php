@extends('backend.master')
@section('title','Danh sách sản phẩm')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Sản phẩm</h1>
		</div>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách sản phẩm</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<a href="{{ asset('dashboard/product/add') }}" class="btn btn-primary">Thêm sản phẩm</a>
							<table class="table table-bordered" style="margin-top:20px;">
								<thead>
									<tr class="bg-primary">
										<th>ID</th>
										<th width="30%">Tên Sản phẩm</th>
										<th>Giá sản phẩm</th>
										<th width="15%">Ảnh sản phẩm</th>
										<th>Tác giả</th>
										<th>Danh mục</th>
										<th width="12%">Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
									@foreach($productlist as $book)
									<tr>
										<td>{{$book->book_id}}</td>
										<td>{{$book->book_name}}</td>
										<td>{{number_format($book->book_price,0,',','.')}} VNĐ</td>
										<td>
											<img width="150px" height="100px" src="{{ asset('frontend/images/'.$book->book_img) }}" class="thumbnail">
										</td>
										<td>{{ $book->author->author_name }}</td>
										<td>{{ $book->type->type_name }}</td>
										<td>
											<a href="{{ asset('dashboard/product/edit/'.$book->book_id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
											<a onclick="return confirm('Bạn có chắc chắn muốn xoá?')" href="{{ asset('dashboard/product/delete/'.$book->book_id) }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
										</td>
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