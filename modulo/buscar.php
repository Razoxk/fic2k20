<?php

 session_start();  
 
 
$servername = "localhost";
$username = "piedpipe_jlizana";
$password = "sG[J%@arp=k0";
$dbname = "piedpipe_fic2k20";

//$servername = "localhost";
//$username = "admingor_fic";
//$password = "fic.2k20!";
//$dbname = "admingor_fic";


	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM proyecto WHERE nombre NOT LIKE '' ORDER By id LIMIT 1000";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM proyecto WHERE id LIKE '%$q%' OR nombre LIKE '%$q%' OR nombre_entidad LIKE '%$q%' ";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>ID</td>
    					<td>Nombre Proyecto</td>
    					<td>Nombre Entidad</td>
						<td>Estado</td>
						<td>Tipo proyecto</td>
    				</tr>
    			</thead>
    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['id']."</td>
    					<td>".$fila['nombre']."</td>
						<td>".$fila['nombre_entidad']."</td>
						<td>".$fila['estado']."</td>
						<td><a href =proyecto.php?id=".$fila['id']."> Ver archivos </a></td>
    					<td>".$fila['tipo_proyecto']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table><br><br>";
    }else{
    	$salida.="NO HAY DATOS";
    }


    echo $salida;

    $conn->close();



?>