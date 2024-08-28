<?php 
include("cn2.php");
$id=$_GET["id"];
$eliminar="DELETE FROM noviembre WHERE id='$id'";
$resultado=mysqli_query($conexion,$eliminar);
header('Location: http://dswen.byethost17.com/calendario/noviembre.php');
?>