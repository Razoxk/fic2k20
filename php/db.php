<?php
$servername = "localhost";
$username = "piedpipe_jlizana";
$password = "sG[J%@arp=k0";
$dbname = "piedpipe_fic2k20";

// $servername = "localhost";
// $username = "admingor_fic";
// $password = "fic.2k20!";
// $dbname = "admingor_fic";

try {
  $conn = new PDO("mysql:host=$servername;dbname=piedpipe_fic2k20", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo  "La base de datos se encuentra conectada correctamente";
} catch(PDOException $e) {
  echo "Error al conectar: " . $e->getMessage();
}

$conn = new mysqli($servername, $username, $password, $dbname);
?> 