	<header id="header">

		<div class="container">

			<a href="index.php" id="logo"><img src="images/logo.png" alt="Logo" /></a>

			<nav id="navigation">

				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="catalog.php">Catalogo</a></li>
					<li><a href="script.php">Script</a></li>
					<li><a href="android.php">Android</a></li>
					<li><a href="registrar.php">Registrar</a></li>
				</ul>

			</nav>
		
		</div>
		<div id="breadCrumbs">
			<p>
				<a href="catalog.php">Catalogo</a> &raquo; <?php echo $_GET["videojuego"]; ?> 
			</p>
		</div>
	</header>