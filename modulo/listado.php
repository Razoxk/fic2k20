<?php  
 session_start(); 
 if	(!isset( $_SESSION['uname'] )){
	 header('location:index.php');
 }
 ?>
 
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> 
	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	<title>Listado</title>
</head>
<body>

<section class="principal">

	<h1>BUSQUEDA DE PROYECTOS</h1>

	<div class="formulario container">
		<label for="caja_busqueda">Buscar</label>
		<input type="text" name="caja_busqueda" id="caja_busqueda"></input>

		
	</div>

	<div id="datos"></div>
	
	
</section>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>