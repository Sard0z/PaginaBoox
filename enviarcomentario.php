<?php
$nombre = $_POST['txtNombre'];
$comentario =$_POST['txtComentario'];

echo($nombre);
echo($comentario);

$mysql=new mysqli("localhost","root","","boox_db");
$nombre= mysqli_real_escape_string($mysql,$nombre);
$comentario= mysqli_real_escape_string($mysql,$comentario);
$resultado= mysqli_query($mysql, 'INSERT INTO comentarios (nombre, comentario) VALUES ("' .$nombre . '", "' . $comentario . '")');

if($resultado)
echo('comentario enviado con exito');
else
echo('error enviando el comentario');

mysqli_close($mysql);
?>