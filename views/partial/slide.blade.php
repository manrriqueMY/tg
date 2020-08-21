<?php 
$img =  ["https://www.tgweb.spyrohost.com/slider/79cfc2cfcc862d3c26486af26513077b.jpg"
		,"https://www.tgweb.spyrohost.com/slider/077e6173513fe0ab5ee6442ff7a092c9.jpg"
		,"https://www.tgweb.spyrohost.com/slider/04db2b6d1f41cbe5547249933a707d1c.jpg"];
?>
<div id="myCarousel" class="mt-20 carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	  @foreach($img as $index => $image)
	  	<li data-target="#myCarousel" data-slide-to="{{$index}}" class="{{$index == 0 ? 'active':''}}"></li>
	  @endforeach
	</ol>
	<div class="carousel-inner">
		@foreach($img as $index => $image)
	      <div class="item {{$index == 0 ? 'active':''}}">
	        <img src="{{$image}}" alt="Los Angeles" style="width:100%;">
	      </div>
		@endforeach
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
	  <span class="glyphicon glyphicon-chevron-left"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
	  <span class="glyphicon glyphicon-chevron-right"></span>
	  <span class="sr-only">Next</span>
	</a>
</div>