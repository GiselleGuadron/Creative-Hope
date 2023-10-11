<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$database = "testimonios";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$testimonio = $_POST['testimonio'];
$fecha = date("Y-m-d"); 


$sql = "INSERT INTO testimonios (nombre, email, testimonio, fecha) VALUES ('$nombre', '$email', '$testimonio', '$fecha')";

if ($conn->query($sql) === TRUE) {
    echo "Testimonio enviado con éxito.";
} else {
    echo "Error al enviar el testimonio: " . $conn->error;
}


$conn->close();
?>