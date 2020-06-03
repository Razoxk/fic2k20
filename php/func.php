<?php 

include 'db.php';

$sql = "INSERT INTO prueba (id, fdata)
VALUES ('', 'Funciona')";

if ($conn->query($sql) === TRUE) {
  echo "Ingresado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>