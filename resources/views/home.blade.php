@extends("layout.master")
@section("content")

@include('include.header')
@if(isset($info))
<div class="hideMess" id="alert-mess">
  <h3 class="text-center">{{ $info }}</h3>
</div>
@endif
<!-- Banner -->
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%;height: calc(80vh - 100px);">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{('frontend/images/sachhay.jpg')}}" alt="" style=" width:100%;height: calc(80vh - 100px);">
      </div>
      <div class="item">
        <img src="{{('frontend/images/banner1.jpg')}}" alt="" style=" width:100%;height: calc(80vh - 100px);">
      </div>
      <div class="item">
        <img src="{{('frontend/images/banner1.png')}}" alt="" style=" width:100%;height: calc(80vh - 100px);">
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<!-- End Of Banner -->
@endsection