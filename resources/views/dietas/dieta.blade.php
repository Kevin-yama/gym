@extends('layouts.page')
@section('content')

<a href="/home" class="scrollToTop btn text-uppercase btn-outline-danger btn-lg mr-3 mb-3  " style="display: inline; padding-left: 8px;right: 140px;
padding-top: 2px;">&#127968; </a>

<div id="fh5co-services" class="fh5co-bg-section"  style="padding-top: 200px;padding-left: 15%;padding-right: 15%;">
		<div class="container">
			<div class="row">
            @foreach ($datos as $data)
				<div class="col-md-4 text-center animate-box" style="margin-bottom: 200px;" >
					<div class="services" >
						<h3> {{$data->nombre}} </h3>

                        <h4>Tiempo que se realiza:  {{$data->periodo}} </h4>
                        <p>cantidad de proteinas :   {{$data->proteinas}} </p>
                        <p>cantidad de frutas  :   {{$data->frutas_verduras}} </p>
                        <p>cantidad de calorias: {{$data->Grasas}}</p>

						<!-- <p><a href="/ejercicios/pectorales" class="btn btn-primary btn-outline btn-sm"> EJERCICIOS <i class="icon-arrow-right"></i></a></p> -->
					</div>
				</div>
        @endforeach

			</div>
            <!--  -->
	    </div>

	</div>







@stop
