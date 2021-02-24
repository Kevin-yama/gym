@extends('layouts.page')
@section('content')


<a href="/home" class="scrollToTop btn text-uppercase btn-outline-danger btn-lg mr-3 mb-3  " style="display: inline; padding-left: 8px;right: 140px;
padding-top: 2px;">&#127968; </a>
<a href="/ejercicios" class="scrollToTop btn text-uppercase btn-outline-danger btn-lg mr-3 mb-3  " style="display: inline; padding-left: 8px;right: 200px;
padding-top: 2px;"> &#128170;</a>

<div id="fh5co-services" class="fh5co-bg-section"  style="padding-top: 200px;padding-left: 25%;">
		<div class="container">
			<div class="row">
            @foreach ($datos as $data)

				<div class="col-md-8 text-center animate-box" style="margin-bottom: 200px;" >
					<div class="services" >
						<h3> {{$data->nombre}} </h3>
                        <img class="card-img-top  img-fluid" src="{{$data->link}}" alt="Card image" >
                        <h4>Objeto para hacer el ejercicio:  {{$data->objeto}} </h4>
                        <p>Tipo de ejercicio:   {{$data->tipo}} </p>

						<!-- <p><a href="/ejercicios/pectorales" class="btn btn-primary btn-outline btn-sm"> EJERCICIOS <i class="icon-arrow-right"></i></a></p> -->
					</div>
				</div>
        @endforeach

			</div>
            <!--  -->
	    </div>

	</div>






@stop

