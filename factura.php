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
				<?php 

					$factura_html = factura(); #Si devuelve 0 es porque hay menos de 3 productos
					if ($factura_html) {
						#Poner_estilos
						$section = '<section class="success">';
						$section_final = '</section>';
						$iva = '
						<div class="iva">
							<div class="bloque">
								<p>Total</p>
								<p>' . $GLOBALS["pagar"] . '</p>
							</div>
							<div class="bloque">
								<p>Iva (1.6%)</p>
								<p>' . ($GLOBALS["pagar"] * 1.6 - $GLOBALS["pagar"]) . '</p>
							</div>
							<div class="bloque">
								<p>Total Con Iva</p>
								<p>' . ($GLOBALS["pagar"] * 1.6) . '</p>
							</div>
						</div>';

						echo $section .user() . factura() . $iva . $section_final;
					}else{
						echo failed();
					};

				 ?>
	</article>
	<footer>
		<p>Nombre: Yilver Quevedo</p>
		<p>CI: 28333459</p>
		<p>Email: yilver0906@gmail.com</p>
	</footer>	
	<?php 
		function user(){
			#data user
			$archivo = fopen("data_user.txt", "rb");
			if ($archivo != false) {
				$texto_users = file("data_user.txt");
				rewind($archivo);
			}

			if (($archivo != false)){
				$texto_imprimir_user = '<div class="name_user">
				<table class="table table_user">
						<thead>
							<tr>
								<th>-</th>
								<th>Usuario</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Nombre</th>
								<td>'. $texto_users[0] . '</td>
							</tr>
							<tr>
								<th>Apellido</th>
								<td>' . $texto_users[1] . '</td>
							</tr>
							<tr>
								<th>Cédula de Identidad</th>
								<td>' . $texto_users[2] . '</td>
							</tr>
							<tr>
								<th>Dirreción</th>
								<td>' . $texto_users[3] . '</dh>
							</tr>
							<tr>
								<th>Número de Télefono</th>
								<td>' . $texto_users[4] . '</td>
							</tr>
						</tbody>
					</table>
					</div>';
			}; 

			fclose($archivo);
			return $texto_imprimir_user;
		};

		function failed(){
			$texto_error = '<section class="factura">
								<div class="saludo">
									<h3 class="nota">Lo sentimos, Tiene que adquirir 3 productos mínimos</h3>
									<p class="nota"></p>
								</div>
							</section>';
			return $texto_error;
		};

		function factura(){
			#Lista de Precios
			$GLOBALS['pagar'] = 0;
			$precios = [
				"berenjena" => 2.0, "brocoli" => 1.7, "calabaza" => 2.2,
				"cambur" => 0.3, "cebolla" => 0.7, "coco" => 1.6,
				"fresa" => 0.2, "guayaba" => 0.8, "lechuga" => 1.0,
				"limon" => 0.7, "mango" => 0.2, "naranja" => 0.4,
				"patilla" => 2.5, "piña" => 1.0, "zanahoria" => 0.3
			];

			#Lista de Cantidad ingresada por el usuario
			$candidad = [
				"berenjena" => $_POST["berenjena"], "brocoli" => $_POST["brocoli"], "calabaza" => $_POST["calabaza"],
				"cambur" => $_POST["cambur"], "cebolla" => $_POST["cebolla"], "coco" => $_POST["coco"],
				"fresa" => $_POST["fresa"], "guayaba" => $_POST["guayaba"], "lechuga" => $_POST["lechuga"],
				"limon" => $_POST["limon"], "mango" => $_POST["mango"], "naranja" => $_POST["naranja"],
				"patilla" => $_POST["patilla"], "piña" => $_POST["piña"], "zanahoria" => $_POST["zanahoria"]
			];

			$texto_factura = '<div class="table_frutas">
				<table class="table table_frutas">
		          <thead>
		          <tr>
		            <th>#</th>
		            <th>Fruta</th>
		            <th>Precio</th>
		            <th>Cantidad</th>
		            <th>Total</th>
		          </tr>
		          </thead>
		          <tbody>
		          </div>';

		    $iterador = 0;
			foreach ($candidad as $key => $value) {
				if ($value != 0) {
					#echo $key . ": " . $precios[$key] . "$ " . $value . "Uds " . $precios[$key] * $value;
		    		$iterador ++;
					$texto_factura = $texto_factura . '<tr>
			            <th>' . $iterador . '</th>
			            <td>' . $key . '</td>
			            <td>' . $precios[$key] . '</td>
			            <td>' . $value . '</td>
			            <td>' . $precios[$key] * $value . '</td></tr>';
			           $GLOBALS["pagar"] += $precios[$key] * $value; 
				};
			};
			$texto_final = '
		          </tbody>
		        </table>';
		    if ($iterador <= 2) {
		    	return 0;
		    };
			return $texto_factura . $texto_final;
		};
	 ?>	 

</body>
</html>