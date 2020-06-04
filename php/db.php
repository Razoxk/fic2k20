<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fic2k20";

try {
  $conn = new PDO("mysql:host=$servername;dbname=postgober", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "La base de datos se encuentra conectada correctamente";
} catch(PDOException $e) {
  echo "Error al conectar: " . $e->getMessage();
}

$conn = new mysqli($servername, $username, $password, $dbname);

?> 