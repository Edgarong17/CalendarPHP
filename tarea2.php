<?php 
session_start();
include("cn2.php");
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$dia=$_POST['dia'];
$usuario=$_POST['id'];
$insertar="INSERT INTO noviembre(Nombre_actividad,Descripcion_actividad,fecha_entrega,usuarios) VALUES('$nombre','$descripcion','$dia','$usuario')";
$resultado=mysqli_query($conexion,$insertar);
header('Location:noviembre.php');
?>