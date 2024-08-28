<?php 
session_start();
$usuario_local=$_SESSION['usuario'];
$id_local=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agregar Usuario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <link rel="stylesheet" type="styles.css" href="">
  <style type="text/css">
    body{
      background-color: lightgrey;
      font-size:25px;
    }
  </style>
</head>
<body>
  <center>
    <div class="container" style="min-width: 700px;">
      <form action="tarea2.php" method="post">
        <br style="min-height: 50%;">
        Nombre de la actividad  
        <br>
        <input type="form-control" name="nombre">
        <br><br>
        Descripción
        <br>
        <input type="form-control" name="descripcion">
        <br>
        <br>
        Fecha de entrega YYYY-MM-DD
        <br>
        <input type="form-control" name="dia">
        <br>
        <input type="hidden" name="id" value="<?php  echo $id_local;?>">
        <br>
        <button class="btn btn-secondary" type="submit" style="min-width: 200px; min-height: 50px; font-size: 25px;">Enviar</button>
      </form>
    </div>
  </center>
</body>
</html>