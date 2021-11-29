<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "boox_db";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die ("No hay conexion".mysqli_connect_error());
}

$correo = $_POST['Correo'];
$pass = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM clientes WHERE correo = '".$correo."' and contraseña = '".$pass."'");
$hr = mysqli_num_rows($query);

if ($hr == 1) {
    //header ("Location: Inicio.php")
    echo "Bienvenido:" .$correo;
} elseif ($hr == 0) {
    echo "No ingreso";
}

?>