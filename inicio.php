<?php 
include("cn2.php");
$acceso="SELECT * FROM Acceso";
session_start();
$_SESSION["usuario"]='';
$_SESSION["id"]='';
$_SESSION["mes"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ingresar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<style>
		input{ width: 250px; height:50px}
	</style>
	<center>
		<form action="crear.php" method="post" style="background-color: lightgrey;">
			<br>
			<h2>Crear usuario</h2>
			<br>
			Nombre	
			<br>
			<input type="form-control" name="nombre">
			<br>
			<br>
			Constraseña
			<br>
			<input type="password" name="contraseña">
			<br>
			<br>
			<button class="btn btn-secondary">Enviar</button>
		</form>
		<p style="background-color: lightgrey;">
			<br>
			<br>
			<h2>Iniciar sesion</h2>
			<br>
			Nombre	
			<br>
			<input type="form-control" name="name" id="name">
			<br>
			<br>
			Constraseña
			<br>
			<input type="password" name="pass" id="pass">
			<br>
			<br>
			<button class="btn btn-light" id="env" name="env">Iniciar sesion</button>
		</p>
	</center>
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous">
</script>
<script type="text/javascript">
	$('#env').click(env);

	function env(){
		var z=0;
		var name=$('#name').val();
		var pass=$('#pass').val();
		<?
		$resultado=mysqli_query($conexion,$acceso);
		while ($row=mysqli_fetch_assoc($resultado)) {
			?>
			if (name=="<?php echo $row["usuario"];?>" && pass=="<?php echo $row["con"];?>") {
				var usuario="<?php echo $row["usuario"];?>";
				var id="<?php echo $row["id"];?>";
				var now = new Date();
				var mes= now.getMonth();
				$.ajax({
					url:'session.php',
					type:'post',
					data:{
						usuario:usuario,
						id:id,
						mes:mes
					}
				}).done(
				function(data){

				}
				);
				$(location).attr('href','noviembre.php');
				z=1;	
			}
		<?php } ?>
		$('#name').val('');
		$('#pass').val('');
		if (z==0) {
			alert("Usuario o Contraseña incorrectos");
		}
	}
</script>

</html>