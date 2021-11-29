<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "boox_db";

$conn= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die ("No hay conexion". mysqli_connect_error());
}

$Nombres = $_POST['Nombres'];
$correo = $_POST['correo'];
$celular = $_POST['Celular'];
$contraseña = $_POST['password'];
$repassword = $_POST['rePassword'];
$reqlen = strlen($Nombres) * strlen($correo) * strlen($celular) * strlen($contraseña) * strlen($repassword);
if ($reqlen > 0) {
    if ($contraseña === $repassword) {
        mysqli_query($conn, 'INSERT INTO clientes (nombre_completo, correo, numero_celular, contraseña) VALUES ("' .$Nombres . '", "' . $correo . '",
        "' . $celular . '", "' . $contraseña . '")');
        echo "Se ha registrado exitosamente";
    } else {
        echo "Por favor, introduzca dos contraseñas identicas.";
    }
    } else {
        echo " Por favor, rellene todos los campos solicitados.";
    }

?>