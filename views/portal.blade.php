@extends('layouts.app')
@section('content')
<?php 
	$items = ["1","1","1","1"];
?>
<div class="pt-20 fd-fluid">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				@include('partial.slide')
			</div>
			<div class="col-md-4">
				<div class="mt-20 panel panel-default">
					<div class="panel-body opcion">
						<div>
							<small><span></span><span>Mejor Precio Garantizado</span></small>
							<h1 class="m0">US$ 120</h1>
						</div>
						<div>
							<i class="color-rojo fas fa-bolt"></i> Confirmación Inmediata/ Confirmación en 48 horas
						</div>

						<div>
							<button class="btn btn-danger rojo btn-block"><i class="fas fa-bolt"></i> Seleccionar Opciones</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<h2><strong>Corredor Valle Sur</strong></h2>
				<small>
			        <span><i class="fas fa-star"></i> 4.1</span>
			        <span>(120 Opiniones)</span>
			    </small>
			    <hr size="2">
			    <p><i class="fas fa-dollar-alt"></i> Cancelación Gratuita ( 72 Horas de anticipación - Cancelación Posible)</p>
			    <div class="row">
			    	<div class="col-md-3"><i class="fas fa-print"></i> Cupón en Formato Electrónico </div>
			    	<div class="col-md-3"><i class="far fa-clock"></i> Duración: 2horas</div>
			    	<div class="col-md-3"><i class="far fa-calendar"></i> Entrada con fecha fija</div>
			    	<div class="col-md-3"><i class="fas fa-globe-americas"></i> Ingles, Español</div>
			    </div>
			    <hr size="2">
			    <ul class="pl-15">
			    	<li>Usa tu tiempo en París de forma mas eficiente y evita las largas colas en dos lugares de intrés mas famosos de la ciudad</li>
			    	<li>Usa tu tiempo en París de forma mas eficiente y evita las largas colas en dos lugares de intrés mas famosos de la ciudad</li>
			    	<li>Usa tu tiempo en París de forma mas eficiente y evita las largas colas en dos lugares de intrés mas famosos de la ciudad</li>
			    	<li>Usa tu tiempo en París de forma mas eficiente y evita las largas colas en dos lugares de intrés mas famosos de la ciudad</li>
			    </ul>
			    <hr>
			</div>
		</div>
		@include('partial.itinerario')
		@include('partial.paquete')
		@include('partial.descripcion')
		<h3 class="titulo"><strong>También podría gustarte</strong></h3>
		<br>
		<div class="row">
			@foreach($items as $item)
				@include('card.panel')
	        @endforeach
	    </div>
		<br>
	</div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/portal.css">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css"/>-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://www.tgweb.spyrohost.com/css/datepicker.min.css">
@endpush
@push('js')
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>-->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://www.tgweb.spyrohost.com/js/datepicker.en.js"></script>
<script>
	$(function(){
		/*$('.input-group.date').datepicker({
		    calendarWeeks: true,
		    todayHighlight: true,
		    autoclose: true
		});*/
		$( ".input-group.date input" ).datepicker();
	});
	function toggeable(id) {
		$(`#detalle${id}`).toggle('fast',function () {
			if($(`#detalle${id}:visible`).length){
				$(`#idetalle${id}`).removeClass("fa-plus-circle");
				$(`#idetalle${id}`).addClass("fa-minus-circle");
			}else{
				$(`#idetalle${id}`).removeClass("fa-minus-circle");
				$(`#idetalle${id}`).addClass("fa-plus-circle");
			}
		});		
	}
</script>
@endpush