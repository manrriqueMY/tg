<?php 
	$items = ["1","1","1","1"];
?>
<div class="paquetes fd-fluid">
	<br>
	<div class="container-fluid">
		<div class="titulo">
			<h3>CONOCE EL <span class="azul">PERÚ</span></h3>
		</div>
		<div class="row">
	        @foreach($items as $item)
				@include('card.panel')
	        @endforeach
	    </div>
	</div>
</div>

<div class="separate">
	<hr size="2">
	<div class="d-flex justify-content-center"><a href="#!"><h4><b>Ver Más <i class="fas fa-chevron-down azul"></i></b></h4></a></div>
</div>