<?php include('multiplos.php')?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>HUMAN COMPUTING</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" type="image/png" href="images/chunche.png"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.html" class="logo"><strong>Forty</strong> <span>by Human Computing </span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Home</a></li>
							<li><a href="https://bit.ly/2UhXUfw">Human Computing 3.0</a></li>
							<li><a href="generic.html">Soluciones de sesiones</a></li>
							<li><a href="elements.html">Sobre mí</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="#" class="button primary fit">Get Started</a></li>
							<li><a href="#" class="button fit">Log In</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" class="alt">
					<a href="index.html #one" class="button" >Volver atrás</a> <br><br>
						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Solucion del enunciado 5.</h1>
										
									</header>
									<div class="inner">
									<pre>
	&lt?php 
		session_start();
		foreach ($_SESSION as $clave => $valor){
			$string=strlen($clave);
			if ($string > 5 && $valor > 100 ){
				echo "La clave $clave de valor $valor";
			}
			else {
				echo &lt li 'style="background-color:#FF00FF"> La clave '.$clave." de valor ".$valor."" &lt li >;
			}
		}
	?>      
									</pre>
									<section class="inner">  
											<?php 
												session_start();
												foreach ($_SESSION as $clave => $valor){
													$string=strlen($clave);
													if ($string > 5 && $valor > 100 ){
														echo "<li>La clave $clave de valor $valor</li>";
													}
													else {
														echo '<li style="background-color:#FF00FF">La clave '.$clave." de valor ".$valor."</li>";
													}
												}
											?>      
									</section>
									</div>
									
								</div>
							</section>

					</div>

				<!-- Contact -->
				<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">humancomputing3@gmail.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span> (+34) 667 33 21 51</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>
											12 Alguna Calle #4<br />
											Springfield, CP 28891<br />
											Spain</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Human Computing 3.0 - Todos los derechos reservados.</li><li>Design: <a href="#">Paulino Esteban Bermúdez R.</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>