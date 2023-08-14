<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$servername = "localhost";
$username = "root";
$password="";
$dbname ="registro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("conexion fallida ". $conn->connect_error);
}

$nombre= $_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];

$sql = "DROP INTO datos(
    nombre, 
    apellido,
    cedula
)

VALUES(
    '$nombre',
    '$apellido',
    '$cedula'
)";

if ($conn-> query($sql)  !== TRUE) {
    echo "error al registar " .$conn->error;
    exit;
}

echo "Registro exitoso";

 $conn -> close();
}
?>