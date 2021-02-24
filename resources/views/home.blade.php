@extends('layouts.master')

@section('content')
<!--START SCROLL TOP BUTTON -->

<!-- END SCROLL TOP BUTTON -->

<div id="Entrenamiento" class="container-fluid fh5co-content-box">
  <div class="container">
    <div class="row trainers pl-0 pr-0" style="margin-top: 0px;">
      <div class="col-12 bg-50">
        <div class="quote-box2 wow bounceInDown" data-wow-delay=".25s">
          <h2> ENTRENAMIENTO  </h2>
        </div>
      </div>
      <div class="col-md-6 pr-5 pl-5">
        <div class="card text-center wow bounceInLeft" data-wow-delay=".25s">
        <a href="/entrenamiento/avanzado">
        <img class="card-img-top rounded-circle img-fluid" src="images/trainers1.jpg" alt="Card image"  style="height: 250px;">
          <div class="card-body mb-5">
            <h4 class="card-title">Avanzado</h4>
            <p class="card-text">Aquí está el nuevo entrenamiento de definición avanzada para todas las personas que hayan entrenado antes ,
            un entrenamiento bastante exigente que  ayudará a conseguir una buena definición muscular,
            siempre que este sea vuestro objetivo.</p>
          </div>
         </a>
        </div>
      </div>
      <div class="col-md-6 pl-5 pr-5">
        <div class="card text-center wow bounceInRight" data-wow-delay=".25s">
        <a href="/entrenamiento/principiante">
        <img class="card-img-top rounded-circle img-fluid" src="images/trainers2.jpg" alt="Card image">
          <div class="card-body mb-5">
            <h4 class="card-title">Principiante</h4>
            <p class="card-text">Este tipo de entrenamiento puede ser una buena opción para la fase de definición.
                                Con este plan de entrenamiento, el objetivo es quemar grasa y asegurar que la masa muscular no sufre al hacerlo.
                                Si eres un principiante en esto del fitness – menos de un año de experiencia – ¡echa un vistazo a lo que hemos preparado para ti!</p>
          </div>
        </a>
        </div>
      </div>
    </div>
    <div  id="dietas" class="row gallery">
      <div class="col-md-4">
        <div class="card">
          <a href="/rutina/perder-peso">
          <div class="card-body mb-4 wow bounceInLeft" data-wow-delay=".25s">
            <h4 class="card-title">PERDER PESO </h4>
            <p class="card-text">realizar el movimiento van a requerir la participación de varios músculos,
                                 lo cual se traduce en un mayor gasto calórico y por tanto, mayor quema de grasas.</p>
          </div>
          </a>
          <img class="card-img-top img-fluid wow bounceInRight" data-wow-delay=".25s" src="images/g1.jpg" alt="Card image"> </div>
      </div>
      <div class="col-md-4">
        <a href="/rutina/definir">
        <div class="card"> <img class="card-img-top img-fluid wow bounceInUp" data-wow-delay=".25s" src="images/g2.jpg" alt="Card image">
          <div class="card-body mt-4 wow bounceInDown" data-wow-delay=".25s">
            <h4 class="card-title">DEFINICION</h4>
            <p class="card-text">Definir músculo se refiere  a la capacidad de perder grasa corporal manteniendo la cantidad de masa muscular intacta ,
                                    para ello, es necesario perder la grasa subcutánea y eliminar el líquido sobrante de los tejidos.</p>
          </div>
        </div>
        </a>
      </div>
      <div class="col-md-4">
        <div class="card">
        <a href="/rutina/hipertrofia">
          <div class="card-body mb-4 wow bounceInRight" data-wow-delay=".25s">
            <h4 class="card-title">HIPERTROFIA</h4>
            <p class="card-text">La hipertrofia muscular es el nombre científico dado al fenómeno de crecimiento
                           en el tamaño de las células musculares, lo cual supone un aumento de tamaño de las fibras musculares y por lo tanto del músculo.</p>
          </div>
          <img class="card-img-top img-fluid wow bounceInLeft" data-wow-delay=".25s" src="images/g3.jpg" alt="Card image"> </div>
        </a>
      </div>
    </div>
  </div>
</div>
<div id="ejercicios" class="container-fluid fh5co-network">

	<div id="fh5co-services" class="fh5co-bg-section" data-image-src="images/about-us-bg.jpg">
		<div class="container">
			<div class="row">

				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<h3>PECHO </h3>
                        <img class="card-img-top rounded-circle img-fluid" src="images/eje1.jpg" alt="Card image" >
						<p><a href="/ejercicios/pectorales" class="btn btn-primary btn-outline btn-sm"> EJERCICIOS <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>


				<div class="col-md-4 text-center animate-box">
					<div class="services">
                    <h3>ESPALDA </h3>
                        <img class="card-img-top rounded-circle img-fluid" src="images/eje2.jpg" alt="Card image" >
						<p><a href="/ejercicios/espalda" class="btn btn-primary btn-outline btn-sm"> EJERCICIOS <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>


				<div class="col-md-4 text-center animate-box">
					<div class="services">
                    <h3>PIERNAS </h3>
                        <img class="card-img-top rounded-circle img-fluid" src="images/eje3.jpg" alt="Card image" >
						<p><a href="/ejercicios/piernas" class="btn btn-primary btn-outline btn-sm"> EJERCICIOS <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>


			</div>

		</div>

	</div>
    <div id="fh5co-services" class="fh5co-bg-section" data-image-src="images/about-us-bg.jpg">
		<div class="container">
			<div class="row">

				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<h3>BRAZOS </h3>
                        <img class="card-img-top rounded-circle img-fluid" src="images/eje4.jpg" alt="Card image" >
						<p><a href="/ejercicios/brazos" class="btn btn-primary btn-outline btn-sm"> EJERCICIOS <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>


				<div class="col-md-4 text-center animate-box">
					<div class="services">
                    <h3>ABDOMEN </h3>
                        <img class="card-img-top rounded-circle img-fluid" src="images/eje5.jpg" alt="Card image" >
						<p><a href="/ejercicios/abdomen" class="btn btn-primary btn-outline btn-sm"> EJERCICIOS <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>


				<div class="col-md-4 text-center animate-box">
					<div class="services">
                    <h3>GLÚTEOS </h3>
                        <img class="card-img-top rounded-circle img-fluid" src="images/eje6.jpg" alt="Card image" >
						<p><a href="/ejercicios/gluteos" class="btn btn-primary btn-outline btn-sm"> EJERCICIOS <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>


			</div>

		</div>

	</div>
</div>
@stop

