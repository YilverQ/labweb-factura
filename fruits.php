<?php
	#Obtener los usuarios dentro de una matriz
	$usuario = [$_POST["nombre"], $_POST["apellido"],
				$_POST["cedula"], $_POST["direccion"],
				$_POST["telefono"]];

	#abrir un documento txt
	$archivo = fopen("data_user.txt", "w");
	$texto = "";

	#agregar los datos del usuario a una cadena de texto
	for ($i=0; $i < 5; $i++) { 
		$texto = $texto . $usuario[$i];
		if ($i < 4) {
			$texto = $texto . "\n"; #Dar un salto de linea
		}
	}

	#escribir los datos del usuario en el archivo txt
	fwrite($archivo, $texto);
	fclose($archivo); #cerrar el documento
?>
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
		<section class="articulos_venta">
		<h3>Frutas y Verduras</h3>
			<form name="frutas" action="factura.php" method="POST">
				<div class="articulo">
					<div class="imagen">
						<img src="img/berenjena.png" alt="berenjena">
					</div>
					<h4 class="title">Berenjena</h4>
					<div class="bottom">
						<div class="btm">
							<p>2.0$</p>
						</div>
						<div class="btm">
							<input type="number" name="berenjena" value="0">
						</div>
					</div>
				</div>
				<div class="articulo">
					<div class="imagen">
						<img src="img/brocoli.png" alt="brocoli">
					</div>
					<h4 class="title">Brocoli</h4>
					<div class="bottom">
						<div class="btm">
							<p>1.7$</p>
						</div>
						<div class="btm">
							<input type="number" name="brocoli" value="0">
						</div>
					</div>
				</div>
				<div class="articulo">
					<div class="imagen">
						<img src="img/calabaza.png" alt="calabaza">
					</div>
					<h4 class="title">Calabaza</h4>
					<div class="bottom">
						<div class="btm">
							<p>2.2$</p>
						</div>
						<div class="btm">
							<input type="number" name="calabaza" value="0">
						</div>
					</div>
				</div>
				<div class="articulo">
					<div class="imagen">
						<img src="img/cambur.png" alt="cambur">
					</div>
					<h4 class="title">Cambur</h4>
					<div class="bottom">
						<div class="btm">
							<p>0.3$</p>
						</div>
						<div class="btm">
							<input type="number" name="cambur" value="0">
						</div>
					</div>
				</div>
				<div class="articulo">
					<div class="imagen">
						<img src="img/cebolla.png" alt="cebolla">
					</div>
					<h4 class="title">Cebolla</h4>
					<div class="bottom">
						<div class="btm">
							<p>0.7$</p>
						</div>
						<div class="btm">
							<input type="number" name="cebolla" value="0">
						</div>
					</div>
				</div>
				<div class="articulo">
					<div class="imagen">
						<img src="img/coco.png" alt="coco">
					</div>
					<h4 class="title">Coco</h4>
					<div class="bottom">
						<div class="btm">
							<p>1.6$</p>
						</div>
						<div class="btm">
							<input type="number" name="coco" value="0">
						</div>
					</div>
				</div>
				<div class="articulo">
					<div class="imagen">
						<img src="img/fresa.png" alt="fresa">
					</div>
					<h4 class="title">Fresa</h4>
					<div class="bottom">
						<div class="btm">
							<p>0.2$</p>
						</div>
						<div class="btm">
							<input type="number" name="fresa" value="0">
						</div>
					</div>
				</div>
				<div class="articulo">
					<div class="imagen">
						<img src="img/guayaba.png" alt="guayaba">
					</div>
					<h4 class="title">Guayaba</h4>
					<div class="bottom">
						<div class="btm">
							<p>0.8$</p>
						</div>
						<div class="btm">
							<input type="number" name="guayaba" value="0">
						</div>
					</div>
				</div>
				<div class="articulo">
					<div class="imagen">
						<img src="img/lechuga.png" alt="lechuga">
					</div>
					<h4 class="title">Lechuga</h4>
					<div class="bottom">
						<div class="btm">
							<p>1.0$</p>
						</div>
						<div class="btm">
							<input type="number" name="lechuga" value="0">
						</div>
					</div>
				</div>
				<div class="articulo">
					<div class="imagen">
						<img src="img/limon.png" alt="limon">
					</div>
					<h4 class="title">Limon</h4>
					<div class="bottom">
						<div class="btm">
							<p>0.7$</p>
						</div>
						<div class="btm">
							<input type="number" name="limon" value="0">
						</div>
					</div>
				</div>
				<div class="articulo">
					<div class="imagen">
						<img src="img/mango.png" alt="mango">
					</div>
					<h4 class="title">Mango</h4>
					<div class="bottom">
						<div class="btm">
							<p>0.2$</p>
						</div>
						<div class="btm">
							<input type="number" name="mango" value="0">
						</div>
					</div>
				</div>
				<div class="articulo">
					<div class="imagen">
						<img src="img/naranja.png" alt="naranja">
					</div>
					<h4 class="title">Naranja</h4>
					<div class="bottom">
						<div class="btm">
							<p>0.4$</p>
						</div>
						<div class="btm">
							<input type="number" name="naranja" value="0">
						</div>
					</div>
				</div>
				<div class="articulo">
					<div class="imagen">
						<img src="img/patilla.png" alt="patilla">
					</div>
					<h4 class="title">Patilla</h4>
					<div class="bottom">
						<div class="btm">
							<p>2.5$</p>
						</div>
						<div class="btm">
							<input type="number" name="patilla" value="0">
						</div>
					</div>
				</div>
				<div class="articulo">
					<div class="imagen">
						<img src="img/piña.png" alt="piña">
					</div>
					<h4 class="title">Piña</h4>
					<div class="bottom">
						<div class="btm">
							<p>1.0$</p>
						</div>
						<div class="btm">
							<input type="number" name="piña" value="0">
						</div>
					</div>
				</div>
				<div class="articulo">
					<div class="imagen">
						<img src="img/zanahoria.png" alt="zanahoria">
					</div>
					<h4 class="title">Zanahoria</h4>
					<div class="bottom">
						<div class="btm">
							<p>0.3$</p>
						</div>
						<div class="btm">
							<input type="number" name="zanahoria" value="0">
						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="botonEnviar">
					<input class="boton" type="submit" value="Enviar">
				</div>
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