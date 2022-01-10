<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yilver Quevedo">
	<meta name="description" content="Sitio web de compras en una fruteria, te genera una factura según el nombre de usuario y objetos adquiridos.">
	<title>Frutería Labweb</title>
	<link rel="stylesheet" type="text/css" href="estilos/normalize.css">
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">

	<link href="img/favicon.png" rel="icon" type="image/png" />
</head>
<body>
	<header>
		<nav>
			<a href="/"><h2>Frutería LabWeb</h2></a>
		</nav>
	</header>
	<article class="main">
		<section class="formulario">
		<h3>Datos del Usuario</h3>
			<form name="usuario" action="fruits.php" method="POST">
				<div class="bloque_2">
					<div class="name">
						<p>Nombre:</p>
						<input type="text" name="nombre" required="True" title="Ingresa el Nombre">
					</div>
					<div class="name">
						<p>Apellido:</p>
						<input type="text" name="apellido" required="True" title="Ingresa el Apellido">
					</div>
				</div>
				<div class="bloque_1">
					<div class="dato">	
						<p>Cedula de Identidad:</p>
						<input type="text" name="cedula" required="True" title="Ingresa la Cedula de Identidad">
					</div>
				</div>
				<div class="bloque_1">
					<div class="dato">
						<p>Direccion:</p>
						<input type="text" name="direccion" required="True" title="Ingresa la Direccion">
					</div>
				</div>
				<div class="bloque_1">
					<div class="dato">
						<p>Numero de Télefono:</p>
						<input type="text" name="telefono" required="True" title="Ingresa el Numero Telefonico">
					</div>
				</div>
				<br>
				<br>
				<input class="boton" type="submit" value="Enviar">
			</form>
		</section>
	</article>
	<footer>
		<p>Nombre: Yilver Quevedo</p>
		<p>CI: 28333459</p>
		<p>Email: yilver0906@gmail.com</p>
	</footer>
</body>
</html>