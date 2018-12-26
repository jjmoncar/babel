

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>.::WhtassapBabel::.</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- script para detecter automaticamente pais -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<script>
			$.getJSON('http://api.wipmania.com/jsonp?callback=?', function (data) {
		    document.getElementById("pais").value = data.address.country;
			});
		</script>

    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.html">
							<img src="img/logoBabel.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="index.html">Inicio</a></li>
						<li><a href="#">Nosotros</a></li>
						<li><a href="#">Funciones</a></li>
						<li><a href="#" onclick="alert('En construcción!');">Descargas</a></li>
						<li><a href="#">Suscribete</a></li>
						<li><a href="contact.html">Contactenos</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->

		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.html">Inicio</a></li>
							<li>Registro</li>
						</ul>
						<h1 class="white-text">Registrate</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Blog -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-9">

						<!-- row -->
						<div class="row">

							<form id="frmDatos" name="frmDatos" method="POST" action="procesar.php">

								<!-- Text input-->
								<div class="form-group">
								  <div class="col-md-4">
								  	<input id="nombre" name="nombre" placeholder="Nombre" class="form-control input-md" type="text" required=""><br>
								  </div>
								</div>

								<!-- Text input-->
								<div class="form-group">  
								  <div class="col-md-4">
								  <input id="apellido" name="apellido" placeholder="Apellido" class="form-control input-md" type="text" required=""><br>
								  </div>
								</div>

								<!-- Text input-->
								<div class="form-group">
								  <div class="col-md-4">
								  <input id="correo" name="correo" placeholder="Correo" class="form-control input-md" type="email" required=""><br> 
								  </div>
								</div>

								<!-- Text input-->
								<div class="form-group">  
								  <div class="col-md-4">
								  <input id="telefono" name="telefono" placeholder="Telefono" class="form-control input-md" type="text" required=""><br>
								  </div>
								</div>

								<!-- Text input-->
								<div class="form-group">
								  <div class="col-md-4">
								  <input id="pais" name="pais" placeholder="Pais" class="form-control input-md" readonly="" type="text">
								  </div><br>
								</div>

								<!-- Select Basic -->
								<div class="form-group">
								  <div class="col-md-4">
								  <input id="estatus" name="estatus" placeholder="Estatus" readonly="true" value="f" class="form-control input-md" type="hidden">
								  </div>
								</div>

								<div class="form-group">
									<div class="col-md-4">
										<a name="enviar" id="enviar" value="Enviar" class="btn btn-primary btn-lg"><i class="fa fa-twitter"></i> Enviar</a>
									</div>
								</div>
							</form>
						</div>
						<!-- /row -->

						<!-- row -->
						<div class="row">	

						</div>
						<!-- /row -->
					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					<div id="aside" class="col-md-3">

						<!-- category widget -->
						<div class="widget category-widget">
							<!-- <h3>Categories</h3> -->

						</div>
						<!-- /category widget -->

						<!-- posts widget -->
						<div class="widget posts-widget">
							<!-- <h3>Recents Posts</h3> -->

						</div>
						<!-- /posts widget -->

						<!-- tags widget -->
						<div class="widget tags-widget">
							<!-- <h3>Tags</h3> -->
						</div>
						<!-- /tags widget -->

					</div>
					<!-- /aside blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->

		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" href="index.html">
								<img src="img/logoBabel.png" alt="logo">
							</a>
						</div>
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<nav id="nav">
						<ul class="main-menu nav navbar-nav navbar-right">
							<li><a href="index.html">Inicio</a></li>
							<li><a href="#">Nosotros</a></li>
							<li><a href="#">Funciones</a></li>
							<li><a href="#" onclick="alert('En construcción!');">Descargas</a></li>
							<li><a href="#">Suscribete</a></li>
							<li><a href="contact.html">Contactenos</a></li>
						</ul>
					</nav>
					<!-- /footer nav -->

				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright 2018. All Rights Reserved. | This site is <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">David Valenza</a></span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>
