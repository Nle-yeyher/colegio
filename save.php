<?php
include 'cone.php';
$nombr=$_POST['nombre'];
$corre=$_POST['correo'];
$contra=$_POST['contrase'];

$sql="INSERT INTO registrar (nombre, correo, contrasena) VALUES ('$nombr','$corre','$contra')";

$ejecutar=mysqli_query($conexion, $sql);
?> 