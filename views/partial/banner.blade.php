<?php 
$img =  ["https://www.tgweb.spyrohost.com/slider/79cfc2cfcc862d3c26486af26513077b.jpg"
		,"https://www.tgweb.spyrohost.com/slider/077e6173513fe0ab5ee6442ff7a092c9.jpg"
		,"https://www.tgweb.spyrohost.com/slider/04db2b6d1f41cbe5547249933a707d1c.jpg"];
?>
<section class="banner">
	<div class="container-fluid">
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	      @foreach($img as $index => $image)
	      	<li data-target="#myCarousel" data-slide-to="{{$index}}" class="{{$index == 0 ? 'active':''}}"></li>
	      @endforeach
	    </ol>
	    <div class="carousel-inner">
	    	<div class="finding">
	          <div class="col-xs-12 col-sm-8 col-md-6 content-search">
	            <div class="input-group input-group-lg style-search">
	              <div class="input-group-btn"> <button type="button" class="btn btn-default b-left"><i
	                    class="fas fa-map-marker-alt"></i></button> </div>
	              <div class="search-section"> <input class="form-control input-lg i-left search-destino" name="destino"
	                  type="text" placeholder="¿A donde quieres ir?" autocomplete="off">
	                <ul class="filter-search ft-destino"></ul>
	              </div>
	              <div class="input-group-btn">
	              	<button type="button" class="btn btn-default s-text send-search">Buscar</button>
	              </div>
	            </div>
	          </div>
	        </div>
			@foreach($img as $index => $image)
		      <div class="item {{$index == 0 ? 'active':''}}">
		        <img src="{{$image}}" alt="Los Angeles" style="width:100%;">
		        <div class="carousel-caption">
		          <h3>Los Angeles</h3>
		          <p>LA is always so much fun!</p>
		        </div>
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
	</div>
</section>