<?php 
include 'meta.php';
?>
<body>
<?php
include 'header.php';
?>
<div class="wrapper">
	<div class="spacer" style="width: 75%; height: 100px; margin: 0 auto;">
	</div><!-- Titulo del sitio -->
	<div class="content">
				<?php
				require_once("conexion.php");

				$consulta=mysqli_query($conexion, "SELECT * FROM videojuegos");
				$x = 0;
				while ($fila = mysqli_fetch_array($consulta)){
					if($x === 0){
						echo "
						<div class='content_row'>
						";
					}
					printf("
						<article class='videojuego'>
							<figure class='imagen_videojuego'>
							<img src='images/%s' alt='%s'>
							<figcaption>%s</figcaption>
							</figure>
							<header class='titulo_videojuego'>
							<h3>%s</h3>
							</header>
							<section class='datos_videojuego'>
							<ul>
								<li><strong>Año: </strong>%s</li>
								<li><strong>Genero: </strong>%s</li>
							</ul>
							</section>
							<section class='descripcion_videojuego'>
								<p>%s</p>
							</section>
							<footer>
							<a href='cotizar.php?videojuego=%s&amp;imagen=%s&amp;anio=%s&amp;genero=%s&amp;descripcion=%s&amp;caption=%s'>Ver detalles</a>
							</footer>
						</article>
					", $fila["imagen"], $fila["videojuego"], $fila["caption"], $fila["videojuego"], $fila["anio"], $fila["genero"], $fila["descripcion"], $fila["videojuego"], $fila["imagen"], $fila["anio"], $fila["genero"], $fila["descripcion"], $fila["caption"]);
					
					$x++;
					if ($x === 3) {
						echo "
						</div>
						";
						$x = 0;
					}
				}
				?>
	</div>
<?php
include 'footer.php';
?>