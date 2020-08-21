<?php 

$its = ["1","1","1","1","1"];

?>
<div class="row">
	<div class="col-md-8">
		<h3 class="titulo"><strong>Itinerario</strong></h3>
		<br>
		<div class="panel panel-default bg-gray">
			<div class="panel-body">

				@foreach($its as $index => $value)
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="d-flex justify-content-between">
								<span><i class="far fa-calendar"></i> Dia {{$index}}</span>
								<a href="#!" onclick="toggeable('{{$index}}')">Ver detalles <i id="idetalle{{$index}}" class="fas {{$index != 0 ? 'fa-plus-circle':'fa-minus-circle'}}"></i></a>
							</div>
							<div id="detalle{{$index}}" style="{{$index != 0 ? 'display: none;':''}}">
								<hr>
								<div>
									<p>Si vienen de Lima, se recomienda salir a partir de las 6:00 am en las empresas de Transporte Cruz del Sur, Oltursa o Flores.</p>
									<p>11:30 am - Recojo del terminal de buses en Ica. </p>
									<p>Inicio de nuestro recorrido, donde visitaremos los siguientes atractivos:</p>						
									<p>Plaza de Armas de Icay los restos del Santuario del Señor de Luren. </p>
									<p>Bodega el Catador, aquí degustaremos sus deliciosos vinos y piscos. </p>
									<p>Tiempo libre para almorzar en los restaurantes turísticos de la zona (por cuenta del viajero).</p>	
									<p>Nos deleitaremos con la hermosa vista que nos brinda la Laguna de la Huacachina, ya que es uno de los pocos oasis naturales que existen en el país.</p>
									<br>
									<p><b>Duración:</b> 3hrs</p>
									<p><b>Tiempo de recogida:</b> 3:00pm</p>
									<p><b>Comida:</b> No incluye</p>
								</div>
							</div>
						</div>
					</div>
				@endforeach

			</div>
		</div>		
	</div>
</div>