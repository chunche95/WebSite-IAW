<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio02-05</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Main -->
		<div id="main">
            <div class="inner">
                <header>
                    <h1> Ejercicio02-05</h1>
                </header>

                    <p>
                        Hacer un Script PHP que reciba un parámetro llamado numero con un valor numerico y muestre :
                        <ul><li> 
                            El área de un polígono regular de N lados con N = número inscrito en una circunferencia de radio = 1.
                        </li></ul>
                        <blockquote> 
                            Datos :
                            El área de una figura regular de n lados inscrita en un circulo de radio r es :
                            A(n) = n r² sen(PI/n)cos(PI/n)
                            Referencias : (Para el ejercicio se da la fórmula, eso no hay que conocerlo o saber deducirlo)

                            NOTA: Se considera que es un polígono ideal por lo que la longitud de su lado es proporcional 
                                  a la de su radio concentrico en la circunferencia que lo contiene.
                        </blockquote>
                    <hr>
                        <form action="">
                            <label for="numero"></label>
                            <input type="text" name="numero" placeholder="Ingrese el número de lados"><br>
                            <input type="submit" value="Mostrar tabla">
                        </form>
					</p>
                    <!-- --------------Ejercicio nº 4  del manual-------------------- -->
                    <article class="style1">
                        <?php 
                            
							/* Código PHP que calcula el area de un poligono de 'n' lados.*/
                            $num=$_GET["numero"];
                            $resultado=$num*pow($num,2)*sin(pi()/$num)*cos(pi()/$num);
                            echo "A($num) = $num x $num<sup>2</sup> x sen(PI/n) x cos(PI/n) =  <br>";
                            echo $resultado;
                            
                        
						?>
						<hr>
						
                    </article>
            </div>
        

        <!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<section>
					<h2>Follow</h2>
					<ul class="icons">
						<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
						<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
						<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</section>
				<ul class="copyright">
					<li>&copy; Human Computing 3.0. All rights reserved</li><li>Design: Paulino E. Bermúdez R.</li>
				</ul>
			</div>
		</footer>
</div>


<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>


