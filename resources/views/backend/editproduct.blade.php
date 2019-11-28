@extends('backend.master')
@section('title','Cập nhật sản phẩm')
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
				<div class="panel-heading">Sửa sản phẩm</div>
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data">
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group">
									<label>Tên sản phẩm</label>
									<input required type="text" name="name" class="form-control" value="{{$product->book_name}}">
								</div>
								<div class="form-group">
									<label>Giá sản phẩm</label>
									<input required type="number" name="price" class="form-control" value="{{$product->book_price}}">
								</div>
								<div class="form-group">
									<label>Ảnh sản phẩm</label>
									<input id="img" type="file" name="img" class="form-control" onchange="changeImg(this)">
									<img id="avatar" class="thumbnail" width="300px" src="{{ asset('lib/storage/app/avatar/'.$product->book_img) }}">
								</div>
								<div class="form-group">
									<label>Trạng thái</label>
									<select required name="status" class="form-control">
										<option value="1" @if($product->book_status == 1) checked @endif>Còn hàng</option>
										<option value="0" @if($product->book_status == 0) checked @endif>Hết hàng</option>
									</select>
								</div>
								<div class="form-group">
									<label>Miêu tả</label>
									<textarea class="ckeditor" required name="description">{{ $product->book_description }}</textarea>
									<script type="text/javascript">
										var editor = CKEDITOR.replace('description', {
											language: 'vi',
											filebrowserImageBrowseUrl: '../../editors/ckfinder/ckfinder.html?Type=Images',
											filebrowserFlashBrowseUrl: '../../editors/ckfinder/ckfinder.html?Type=Flash',
											filebrowserImageUploadUrl: '../../editors/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
											filebrowserFlashUploadUrl: '../../editors/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
										});
									</script>
								</div>
								<div class="form-group">
									<label>Danh mục</label>
									<select required name="cate" class="form-control">
										@if(count($typelist) > 0)
										@foreach($typelist as $type)
										<option value="{{$type->type_id}}" @if($product->book_type == $type->type_id) selected @endif>
											{{$type->type_name}}
										</option>
										@endforeach
										@else
										<option value="">Không có danh mục</option>
										@endif
									</select>
								</div>
								<div class="form-group">
									<label>Tác giả</label>
									<select required name="author" class="form-control">
										@if(count($authorlist) > 0)
										@foreach($authorlist as $author)
										<option value="{{$author->author_id}}">{{$author->author_name}}</option>
										@endforeach
										@else
										<option value="">Không có tác giả</option>
										@endif
									</select>
								</div>
								<div class="form-group">
									<label>Nhà xuất bản</label>
									<select required name="publisher" class="form-control">
										@if(count($publisherlist) > 0)
										@foreach($publisherlist as $publisher)
										<option value="{{$publisher->publisher_id}}">{{$publisher->publisher_name}}</option>
										@endforeach
										@else
										<option value="">Không có nhà xuất bản</option>
										@endif
									</select>
								</div>
								<div class="form-group">
									<label>Sản phẩm nổi bật</label><br>
									Có: <input type="radio" name="featured" value="1" @if($product->prod_featured == 1) checked @endif>
									Không: <input type="radio" name="featured" value="0" @if($product->prod_featured == 0) checked @endif>
								</div>
								<input type="submit" name="submit" value="Sửa" class="btn btn-primary">
								<a href="{{ asset('admin/product') }}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
						{{ csrf_field() }}
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--/.row-->
</div>
<!--/.main-->
@endsection