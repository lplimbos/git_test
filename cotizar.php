<?php 
include 'meta.php';
?>

<body>

<?php
include 'header.php';
?>

<div id='principal'>
	<div class="spacer" style="width: 75%; height: 60px; margin: 0 auto;">
	</div>
	<article class='videojuego' 
	style='
	border-right-style: solid; 
	border-right-width: 1px; 
	border-right-color: #C8C8C8;
    box-shadow: 5px 5px 8px #888888;
	background-color: #fff;
	margin: 0 auto 0 0;
	padding-bottom: 85px;
	'>
	<?php
	$videojuego=$_GET['videojuego'];
	$imagen=$_GET['imagen'];
	$anio=$_GET['anio'];
	$genero=$_GET['genero'];
	$descripcion=$_GET['descripcion'];
	$caption=$_GET['caption'];
	
	echo "
		<figure class='imagen_videojuego'>
			<img src='images/$imagen' />
			<figcaption>$caption</figcaption>
		</figure>
		<header class='titulo_videojuego'>
			<h3>$videojuego</h3>
		</header>
		<section class='datos_videojuego'>
			<ul>
				<li><strong>Año: </strong>$anio</li>
				<li><strong>Genero: </strong>$genero</li>
			</ul>
		</section>
		<section class='descripcion_videojuego'>
			<p>$descripcion</p>
		</section>
	";
	?>


	</article>

	<div class='formulario'>
		<?php 
			if (isset($_POST["enviar"])){
				$nombre = $_POST["nombre"];
				$videojuego = $_GET["videojuego"];
				$correo = $_POST["correo"];
				$telefono = $_POST["telefono"];
				$comentario = $_POST["comentario"];

				$para = "lplimbos@gmail.com";
				$titulo = "$nombre ha solicitado una cotizacion";

				$mensaje = "
					Usuario: $nombre\n\n
					
					Correo: $correo\n
					Telefono: $telefono\n
					Videojuego: $videojuego\n\n

					Comentario: $comentario
				";

				$cabecera = "From: $correo";
				mail($para, $titulo, $mensaje, $cabecera);

				echo "Hola $nombre, su cotizacion ha sido enviada con exito";
			} else {
		?>
		<h3>Llena el siguiente formulario para solicitar una cotizacion:</h3>
		
		<form action='#' method='post'>
			
			<table>
				
				<tr>
					<td><label>Nombre:</label></td>
					<td><input type='text' name='nombre' placeholder='Ingrese su nombre' /></td>
				</tr>

				<tr>
					<td><label>Correo:</label></td>
					<td><input type='email' name='correo' /></td>
				</tr>

				<tr>
					<td><label>Telefono:</label></td>
					<td><input type='number' name='telefono' /></td>
				</tr>
				
				<tr>
					<td>Comentario:</td>
					<td><textarea name='comentario'></textarea></td>
				</tr>

				<tr>
					<td></td>
					<td><input type='submit' name='Enviar' name="enviar" /></td>
				</tr>

			</table>

		</form>
		<?php 
			}
		?>
	</div>

</div>

<?php
include 'footer.php';
?>