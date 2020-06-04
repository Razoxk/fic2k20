<?php 

include 'db.php';

$nombreProyecto = $_POST['nombreProyecto'];
$nombreEntidad = $_POST['nombreEntidad'];

//1.3 Datos Coordinador 

$rutCoordinador = $_POST['rutCoordinador'];
$nombreCoordinador = $_POST['nombreCoordinador'];
$cargoCoordinador = $_POST['cargoCoordinador'];
$telefonoCoordinador = $_POST['telefonoCoordinador'];
$celularCoordinador = $_POST['celularCoordinador'];
$emailCoordinador = $_POST['emailCoordinador'];
$direccionCoordinador = $_POST['direccionCoordinador'];

// 1.4 Datos representante

$rutRepresentante = $_POST['rutRepresentante'];
$nombreRepresentante = $_POST['nombreRepresentante'];
$cargoRepresentante = $_POST['cargoRepresentante'];
$numeroRepresentante = $_POST['numeroRepresentante'];
$celularRepresentante = $_POST['celularRepresentante'];
$emailRepresentante = $_POST['emailRepresentante'];
$direccionRepresentante = $_POST['direccionRepresentante'];

//3. Estado del Arte


$estado = $_POST['estado'];





echo "Datos almacenados";


$sqlProyecto = "INSERT INTO prueba (id, fdata)
VALUES ('', 'Funciona')";



?>