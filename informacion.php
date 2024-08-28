<?php 
include("cn2.php");
$noviembre="SELECT * FROM noviembre";
$acceso="SELECT * FROM Acceso";
session_start();
$id=$_GET["id"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Informacion</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous">
	</script>
	<style type="text/css">
		body{
			font-size: 25px;
			background-color: grey;
		}
		.rectangulo{
			border-radius:2em;
			border: 3px solid #000000;
			width: 50%;
			height: 80%;
			background-color: lightgrey;
			border-color: black;
			position: absolute;
			top: 10%;
			left: 25%;
		}
		.container{
			max-width: 50%;
			max-height: 80%;
			position: absolute;
			top: 12%;
			left: 28%;
		}
	</style>
</head>
<body>
	<div class="rectangulo"></div>
	<div class="container">
		<h3>Nombre</h3>
		<p>
			<?php 
			$resultado=mysqli_query($conexion,$noviembre);
			while ($row=mysqli_fetch_assoc($resultado)) {
				if ($id==$row["id"]) {
					echo $row["Nombre_actividad"];
				}
			}
			?>
		</p>
		<h3>Descripcion</h3>
		<p>
			<?php 
			$resultado=mysqli_query($conexion,$noviembre);
			while ($row=mysqli_fetch_assoc($resultado)) {
				if ($id==$row["id"]) {
					echo $row["Descripcion_actividad"];
				}
			}
			?>
		</p>
		<h3>Fecha de Entrega</h3>
		<p>
			<?php 
			$resultado=mysqli_query($conexion,$noviembre);
			while ($row=mysqli_fetch_assoc($resultado)) {
				if ($id==$row["id"]) {
					echo $row["fecha_entrega"];
				}
			}
			?>
		</p>
		<button class="btn btn-secondary" id="volver" name="volver">Volver</button>
		<h3>Compartir con: </h3>
		<input type="form-control" name="compartir" id="compartir">
		<button class="btn btn-secondary" id="com" name="com">Compartir</button>
	</div>
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous">
</script>
<script type="text/javascript">
	$('#volver').click(volver);
	$('#com').click(com);
	function volver(){
		$(location).attr('href','noviembre.php');
	}
	function com(){
		var compartir=$('#compartir').val();
		console.log(compartir);
		<?php 
		$resultado=mysqli_query($conexion,$noviembre);
		while ($row=mysqli_fetch_assoc($resultado)) {
			if ($id==$row["id"]) { ?> 
				var nombre='<?php echo $row["Nombre_actividad"];?>';
				var descripcion='<?php echo $row["Descripcion_actividad"];?>';
				var dia='<?php echo $row["fecha_entrega"];?>';
				<?php
			}
		}
		?>
		var comparar='';
		<?php 
		$resultado=mysqli_query($conexion,$acceso);
		while ($row=mysqli_fetch_assoc($resultado)) {
			?>
			if ("<?php echo $row["usuario"];?>"==compartir) {
				console.log(compartir);
				compartir='<?php echo $row["id"];?>';
				console.log(compartir);
			}
			<?php 
		}
		?>
		$.ajax({
			url:'compartir.php',
			type:'post',
			data:{
				nombre:nombre,
				descripcion:descripcion,
				dia:dia,
				compartir:compartir
			}
		}).done(
		function(data){
			alert("Se ha compartido la tarea con exito");
		}
		);
	}
</script>
</html>