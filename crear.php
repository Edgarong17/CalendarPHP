<?php 
  include("cn2.php");
  $nombre=$_POST['nombre'];
  $contraseña=$_POST['contraseña'];
  $insertar="INSERT INTO Acceso(usuario,con) VALUES('$nombre','$contraseña')";
  $resultado=mysqli_query($conexion,$insertar);
  header('Location: http://dswen.byethost17.com/calendario/inicio.php');
?>