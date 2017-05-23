<?php 
include 'meta.php';
 ?>
<body>
<?php 
include 'header.php';
 ?>
 <div class="spacer" style="width: 75%; height: 70px; margin: 0 auto;">
	</div><!-- Titulo del sitio -->
	<h3>Registrar un juego nuevo</h3>
	<?php
		if (isset($_POST["enviar"])) {
			require_once("conexion.php");
			
			$nombre=$_POST["nombre"];
			$anio=$_POST["anio"];
			$genero=$_POST["genero"];
			$descripcion=$_POST["descripcion"];
			$caption=$_POST["caption"];

			$registrar=mysqli_query($conexion, "INSERT INTO videojuegos VALUES (NULL, '$nombre', '', '$anio', '$genero', '$descripcion', '$caption')");

			echo "<h2>Juego registrado con éxito</h2>";
		}
	?>
	<h2><em>Llena el siguiente formulario</em></h2>
	
	<form action="#" method="post">
		<table>
			<tr><!-- tr = table row = fila de la tabla -->
				<td><label>Nombre:</label></td>
				<!-- td = table data =datos de la tabla -->
				<td><input type="text" name="nombre" /></td>
			</tr>
			<tr>
				<td><label>Portada:</label></td>
				<td><input type="file" name="imagen[]" /></td>
			</tr>
			<tr>
				<td><label>Año:</label></td>
				<td><input type="number" name="anio" /></td>
			</tr>
			<tr>
				<td><label>Género:</label></td>
				<td>
					<select name="genero">
						<option value="accion">accion</option>
						<option value="aventuras">aventuras</option>
						<option value="suspenso">suspenso</option>
						<option value="carreras">carreras</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Descripción</label></td>
				<td><textarea name="descripcion"></textarea></td>
			</tr>
			<tr>
				<td><label>Caption</label></td>
				<td><input type="text" name="caption" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" class="boton" name="enviar" value="REGISTRAR" /></td>
			</tr>
		</table>
	</form>
</body>
<?php 
include 'footer.php';
 ?>