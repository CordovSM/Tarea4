<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Al Pomodoro</title>
	<link rel="stylesheet" type="text/css" href="../css/restaurant.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>
	<header class="navbar-dark bg-dark">
		<div class="container fixed-top">
			<nav class="navbar navbar-expand-lg">
				<a class="navbar-brand" href="#">
					<img src="../img/logo-blanco.png" class="img-fluid" width="170" height="70" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse float-right" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#nosotros">Nosotros <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#menu">Menú</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contacto">Contáctanos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#reservaciones">Reservaciones</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<section>
		<article>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="../img/portada1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../img/portada2.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../img/portada3.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
			</div>
		</article>
		<div class="line"></div>
		<article id="nosotros" class="fondo1">
			<br>
			<br>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 fondoa">
						<h1>Nosotros</h1>
						<h2 class="txt1">Lo mejor de Italia en El Salvador</h2>
						<p>
							La comida de Italia no se basa en la innovación sino en la constancia. A los italianos les gusta comer platos locales, sus queridas recetas del terruño, y el resultado es una continuidad real con el pasado, donde las mujeres todavía elaboran la pasta fresca para el almuerzo y florecen las pequeñas trattorias que sirven especialidades regionales en medio de un bullicio de personas y familia.
						</p>
					</div>
				</div>
			</div>
			<br>
		</article>
		<div class="linea"></div>
		<article id="menu" class="fondo2">
			<br>
			<br>
			<div class="container">
				<h1 class="menufont">Especialidades de la semana</h1>
				<br>
				<div class="row">
					<div class="col-lg-4">
						<div class="card" style="width: 18rem;">
							<img src="../img/toscana.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Pizza toscana</h5>
								<p class="card-text">Mozzarella, lascas de berenjena, zuchinni zanahoria y pimientos a la plancha, tomate y pesto.</p>
								<a href="#" class="btn btn-danger">Ordenar</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card" style="width: 18rem;">
							<img src="../img/trufa.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Lasagna a la trufa</h5>
								<p class="card-text">Pollo, hongos frescos y salsa de trufa.</p>
								<a href="#" class="btn btn-danger">Ordenar</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card" style="width: 18rem;">
							<img src="../img/pizzamargarita.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Pizza Margarita</h5>
								<p class="card-text">Pan plano horneado, rodajas de tomate, bolas de queso mozzarella, orégano y pesto.</p>
								<a href="#" class="btn btn-danger">Ordenar</a>
							</div>
						</div>
					</div>
				</div>
				<br>
				<hr>
				<br>
				<h1 class="menufont"> Menú </h1>
				<br>
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="fondoa">
							<h1>Pizzas</h1>
							<br>
							<h2 class="txt2"><b>Pizza Margarita</b></h2>
							<hr>
							<p>
								Pan plano horneado, rodajas de tomate, bolas de queso mozzarella, orégano y pesto
							</p>
							<br>
							<h2 class="txt2"><b>Pizza Quatro Quesos</b></h2>
							<hr>
							<p>
								Mozzarella, gorgonzola, parmesano, peccorino 
							</p>
							<br>
							<h2 class="txt2"><b>Pizza Frutos del Mar</b></h2>
							<hr>
							<p>
								Calamares, camarones, almejas y mejillones
							</p>
							<br>
							<h2 class="txt2"><b>Pizza Campechana</b></h2>
							<hr>
							<p>
								Hongos frescos, jamón prosciutto, gorgonzola 
							</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="fondoa">
							<h1>Pastas</h1>
							<br>
							<h2 class="txt2"><b>Lasagna Bolognese</b></h2>
							<hr>
							<p>
								Salsa de carne, tomates, vegetales, cocinado a fuego lento 
							</p>
							<br>
							<h2 class="txt2"><b>Gnocchi alla Sorrentina</b></h2>
							<hr>
							<p>
								Salsa pomodoro, albahaca, gratinados con mozzarella y parmesano
							</p>
							<br>
							<h2 class="txt2"><b>Ravioli Arezzo</b></h2>
							<hr>
							<p>
								Rellenos de camarón, espárragos, tocino, provolone y salsa de ajo rostizado 
							</p>
							<br>
							<h2 class="txt2"><b>Lasagna a la Trufa</b></h2>
							<hr>
							<p>
								Pollo, hongos frescos y salsa de trufa 
							</p>
						</div>						
					</div>
				</div>
			</div>
			<br>
		</article>
		<div class="lineb"></div>
		<article id="contacto" class="fondo3">
			<br>
			<br>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 columna">
						<h1>Reservaciones</h1>
						<h2 class="txt1">Un restaurante italiano de mucha tradición en El Salvador por su insuperable calidad. La esencia de la “Dolce Vita”.</h2>
						<br>

						
						<form  action="enviarcorreo.php" method="post">
							<div class="form-row">
								<div class="form-group col-md-6">
									<input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre">
								</div>
								<div class="form-group col-md-6">
									<input id="apellido" name="apellido" type="text" class="form-control" placeholder="Apellido">
								</div>
							</div>
							<div class="form-group">
								<input id="correo" name="correo"  type="email" class="form-control"  placeholder="Email">
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<input id="telefono" name="telefono" type="text" class="form-control"  placeholder="Teléfono">
								</div>
								<div class="form-group col-md-6">
									<select id="personas" name="personas" class="form-control">
										<option value="1-3 personas">1-3 personas</option>
										<option value="4-7 personas">4-7 personas</option>
										<option value="8-10 personas">8-10 personas</option>
										<option value="11-15 personas">11-15 personas</option>
										<option value="16-20 personas">16-20 personas</option>
									</select>
								</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<input id="fecha" name="fecha" type="text" class="form-control" placeholder="Fecha">
									</div>
									<div class="form-group col-md-6">
										<input id="hora" name="hora" type="text" class="form-control" placeholder="Hora">
									</div>
								</div>
								<div class="form-group">
									<textarea id="comentario" name="comentario" cols="30" rows="4" class="form-control" placeholder="Agregue un comentario acerca del menú deseado"></textarea>
								</div>
								<button type="submit" class="btn btn-light">Enviar</button>
							</form>
						
						
						
						</div>
					</div>
				</div>
				<br>
			</article>
			<div class="linec"></div>
			<article id="reservaciones" class="fondo4">
				<br>
				<br>
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="fondob">
								<h1>Contacto</h1>
								<br>
								<p><b>Llámanos:</b>  +503 2243 7888 
									<br>
									<br>
									<b>Av. La Revolución y Calle Circunvalación Av. No. 184</b>
								</p>
								<h1>Horarios</h1>
								<br>
								<p><b>Lunes a Viernes</b>
									<br>
									12 a 3pm
									<br>
									6 a 10pm
									<br>
									<br>
									<b>Sábado y Domingo</b>
									<br>
									12 a 11pm
								</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="fondob">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2285.0710690110973!2d-89.24094495287919!3d13.690694697573383!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x544fe942ab74e141!2sAl+Pomodoro!5e0!3m2!1ses!2ssv!4v1551488995639" width="500" height="405" frameborder="0" style="border:2; border-radius: 1rem;" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
				<br>
			</article>
		</section>
		<footer class="color">
			<img src="../img/logo-color.gif" class="centro" width="170" height="70" alt="">
			<hr class="container">
			<p class="txtfinal">	Al Pomodoro Copyright © 2018 </p>
		</footer>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script type="text/javascript"  src="../js/smooth-scroll.polyfills.js"></script>
		<script>$('.carousel').carousel({
			interval: 2000
		})</script>
		<script>
			var scroll = new SmoothScroll('a[href*="#"]')
		</script>
	</body>
	</html>