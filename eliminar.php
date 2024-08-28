<?php 
include("cn2.php");
$noviembre="SELECT * FROM noviembre";

session_start();
$id_local=$_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eliminar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous">
	</script>
</head>
<body>
	<table border="1">
		<tr>
			<th>Eliminar Noviembre</th>
		</tr>
		<tr>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Fecha de entrega</th>
			<th>Eliminar</th>
		</tr>
		<?php
		$resultado=mysqli_query($conexion,$noviembre);
		while ($row=mysqli_fetch_assoc($resultado)) {
			if ($id_local==$row["usuarios"]) {
				?>
				<tr>				
					<td>
						<?php
						echo $row["Nombre_actividad"];
						?>
					</td>
					<td>
						<?php
						echo $row["Descripcion_actividad"];
						?>
					</td>
					<td>
						<?php
						echo $row["fecha_entrega"];
						?>
					</td>
					<td>
						<a href="eliminar2.php?id=<?php echo $row["id"];?>">Eliminar</a>
					</td>
				</tr>
				<?php
			}
			
		} 
	?>
	</table>
	<button class="btn btn-secondary" id="volver" name="volver">Volver</button>
</body>
<script type="text/javascript">
	$('#volver').click(volver);
	function volver(){
		$(location).attr('href','noviembre.php');
	}
	
</script>
</html>
