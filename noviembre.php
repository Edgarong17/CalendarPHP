<?php 
include("cn2.php");
$noviembre="SELECT * FROM noviembre";
session_start();
$usuario_local=$_SESSION['usuario'];
$id_local=$_SESSION['id'];
$mes=$_SESSION['mes'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Interfaz de mes</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous">
	</script>
	<style type="text/css">
		th
		{
			font-size: 20px;
			text-align: center;
			border: 1px solid black;
		}
		td 
		{
			font-size: 20px;
			text-align: left;
			border: 1px solid black;
			height: 120px;
			width: 10%;
			vertical-align: text-top;
		}
		.nmes{
			font-size: calc(1em + 1vw);
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-light" style="min-width: 100%;">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><?php echo $usuario_local;?></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				</ul>
				<marquee direction="right" behavior="alternate">
					<input class="navbar-brand" href="#" id="fech" value="-" style="width: 50%; background-color: #f8f9fa; border:0px; text-align: center;"></input>
				</marquee>
		</div>
	</nav>
	<div class="row">
		<div class="col-2">
			<br>
			<button class="btn btn-secondary" id="anterior" name="anterior">Mes anterior</button>
			<br>
			<br>
			<button class="btn btn-secondary" id="tarea" name="tarea">Agregar Tarea</button>
		</div>
		<div class="col-8">
			<?php if ($mes=='10') { ?>
				<div class="nmes" style="text-align:center; font-size: 50px;">Noviembre</div>
			<?php } ?>
			<?php if ($mes=='11') { ?>
				<div class="nmes"style="text-align:center; font-size: 50px;">Diciembre</div>
			<?php } ?>
			<?php if ($mes=='0') { ?>
				<div class="nmes"style="text-align:center; font-size: 50px;">Enero</div>
			<?php } ?>
			<?php if ($mes=='1') { ?>
				<div class="nmes"style="text-align:center; font-size: 50px;">Febrero</div>
			<?php } ?>
			<?php if ($mes=='2') { ?>
				<div class="nmes"style="text-align:center; font-size: 50px;">Marzo</div>
			<?php } ?>
			<?php if ($mes=='3') { ?>
				<div class="nmes"style="text-align:center; font-size: 50px;">Abril</div>
			<?php } ?>
			<?php if ($mes=='4') { ?>
				<div class="nmes"style="text-align:center; font-size: 50px;">Mayo</div>
			<?php } ?>
			<?php if ($mes=='5') { ?>
				<div class="nmes"style="text-align:center; font-size: 50px;">Junio</div>
			<?php } ?>
			<?php if ($mes=='6') { ?>
				<div class="nmes"style="text-align:center; font-size: 50px;">Julio</div>
			<?php } ?>
			<?php if ($mes=='7') { ?>
				<div class="nmes"style="text-align:center; font-size: 50px;">Agosto</div>
			<?php } ?>
			<?php if ($mes=='8') { ?>
				<div class="nmes"style="text-align:center; font-size: 50px;">Septiembre</div>
			<?php } ?>
			<?php if ($mes=='9') { ?>
				<div class="nmes"style="text-align:center; font-size: 50px;">Octubre</div>
			<?php } ?>
		</div>
		<div class="col-2">
			<br>
			<button class="btn btn-secondary" id="siguiente" name="siguiente">Proximo mes</button>
			<br>
			<br>
			<button class="btn btn-secondary" id="eliminar" name="eliminar">Eliminar</button>
		</div>
	</div>
	<br>
	<center>
		<div class="container">
			<table style="min-width: 100%;">
				<tr>
					<th>Domingo</th>
					<th>Lunes</th>
					<th>Martes</th>
					<th>Miercoles</th>
					<th>Jueves</th>
					<th>Viernes</th>
					<th>Sabado</th>
				</tr>
				<?php
				if ($mes=='10'){ 	
					?>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<?php 
						$x=1;
						$y=4;
						while($x<=30){
							?> 
							<td>
								<?php
								echo $x;?>
								<?php 
								$resultado=mysqli_query($conexion,$noviembre);
								while ($row=mysqli_fetch_assoc($resultado)) {
									$fechaEntera = strtotime($row["fecha_entrega"]);
									$dia = date("j", $fechaEntera);
									$meses = date("m", $fechaEntera);
									if($x==$dia && $meses==11){
										if ($id_local==$row["usuarios"]) {
											echo "<br>";?>
											<a href="informacion.php?id=<?php echo $row["id"];?>"><?php echo $row["Nombre_actividad"];?></a´><?php
										}
									}
								}?>
								<?php
								if($x==$y){
									$y=$y+7;
									?>
								</tr>
								<tr>
									<?php 
								}
								?>
							</td>
							<?php
							$x=$x+1;
						}
						?>
						<td></td>
						<td></td>
					</tr>
					<?php 
				} ?>
				<?php
				if ($mes=="11"){ 	
					?>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<?php 
						$x=1;
						$y=3;
						while($x<=31){
							?> 
							<td>
								<?php 
								echo $x;?>
								<?php 
								$resultado=mysqli_query($conexion,$noviembre);
								while ($row=mysqli_fetch_assoc($resultado)) {
									$fechaEntera = strtotime($row["fecha_entrega"]);
									$dia = date("j", $fechaEntera);
									$meses = date("m", $fechaEntera);
									if($x==$dia && $meses==12){
										if ($id_local==$row["usuarios"]) {
											echo "<br>";?>
											<a href="informacion.php?id=<?php echo $row["id"];?>"><?php echo $row["Nombre_actividad"];?></a´><?php
										}
									}
								}?>
								<?php
								if($x==$y){
									$y=$y+7;
								?></tr><tr>
									<?php 
								}
								?>
							</td>
							<?php
							$x=$x+1;
						}
						?>
						<?php 
					} ?>
				</tr>
				<?php
				if ($mes=='0'){ 	
					?>
					<tr>
						<?php 
						$x=1;
						$y=7;
						while($x<=31){
							?> 
							<td>
								<?php
								echo $x;?>
								<?php 
								$resultado=mysqli_query($conexion,$noviembre);
								while ($row=mysqli_fetch_assoc($resultado)) {
									$fechaEntera = strtotime($row["fecha_entrega"]);
									$dia = date("j", $fechaEntera);
									$meses = date("m", $fechaEntera);
									if($x==$dia && $meses==1){
										if ($id_local==$row["usuarios"]) {
											echo "<br>";?>
											<a href="informacion.php?id=<?php echo $row["id"];?>"><?php echo $row["Nombre_actividad"];?></a´><?php
										}
									}
								}?>
								<?php
								if($x==$y){
									$y=$y+7;
									?>
								</tr>
								<tr>
									<?php 
								}
								?>
							</td>
							<?php
							$x=$x+1;
						}
						?>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<?php 
				} ?>
				<?php
				if ($mes=='1'){ 	
					?>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<?php 
						$x=1;
						$y=4;
						while($x<=28){
							?> 
							<td>
								<?php
								echo $x;?>
								<?php 
								$resultado=mysqli_query($conexion,$noviembre);
								while ($row=mysqli_fetch_assoc($resultado)) {
									$fechaEntera = strtotime($row["fecha_entrega"]);
									$dia = date("j", $fechaEntera);
									$meses = date("m", $fechaEntera);
									if($x==$dia && $meses==2){
										if ($id_local==$row["usuarios"]) {
											echo "<br>";?>
											<a href="informacion.php?id=<?php echo $row["id"];?>"><?php echo $row["Nombre_actividad"];?></a´><?php
										}
									}
								}?>
								<?php
								if($x==$y){
									$y=$y+7;
									?>
								</tr>
								<tr>
									<?php 
								}
								?>
							</td>
							<?php
							$x=$x+1;
						}
						?>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<?php 
				} ?>
				<?php
				if ($mes=='2'){ 	
					?>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<?php 
						$x=1;
						$y=4;
						while($x<=31){
							?> 
							<td>
								<?php
								echo $x;?>
								<?php 
								$resultado=mysqli_query($conexion,$noviembre);
								while ($row=mysqli_fetch_assoc($resultado)) {
									$fechaEntera = strtotime($row["fecha_entrega"]);
									$dia = date("j", $fechaEntera);
									$meses = date("m", $fechaEntera);
									if($x==$dia && $meses==3){
										if ($id_local==$row["usuarios"]) {
											echo "<br>";?>
											<a href="informacion.php?id=<?php echo $row["id"];?>"><?php echo $row["Nombre_actividad"];?></a´><?php
										}
									}
								}?>
								<?php
								if($x==$y){
									$y=$y+7;
									?>
								</tr>
								<tr>
									<?php 
								}
								?>
							</td>
							<?php
							$x=$x+1;
						}
						?>
						
						<td></td>
					</tr>
					<?php 
				} ?>
				<?php
				if ($mes=='3'){ 	
					?>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<?php 
						$x=1;
						$y=1;
						while($x<=30){
							?> 
							<td>
								<?php
								echo $x;?>
								<?php 
								$resultado=mysqli_query($conexion,$noviembre);
								while ($row=mysqli_fetch_assoc($resultado)) {
									$fechaEntera = strtotime($row["fecha_entrega"]);
									$dia = date("j", $fechaEntera);
									$meses = date("m", $fechaEntera);
									if($x==$dia && $meses==4){
										if ($id_local==$row["usuarios"]) {
											echo "<br>";?>
											<a href="informacion.php?id=<?php echo $row["id"];?>"><?php echo $row["Nombre_actividad"];?></a´><?php
										}
									}
								}?>
								<?php
								if($x==$y){
									$y=$y+7;
									?>
								</tr>
								<tr>
									<?php 
								}
								?>
							</td>
							<?php
							$x=$x+1;
						}
						?>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<?php 
				} ?>
				<?php
				if ($mes=='4'){ 	
					?>
					<tr>
						<td></td>
						<?php 
						$x=1;
						$y=6;
						while($x<=31){
							?> 
							<td>
								<?php
								echo $x;?>
								<?php 
								$resultado=mysqli_query($conexion,$noviembre);
								while ($row=mysqli_fetch_assoc($resultado)) {
									$fechaEntera = strtotime($row["fecha_entrega"]);
									$dia = date("j", $fechaEntera);
									$meses = date("m", $fechaEntera);
									if($x==$dia && $meses==5){
										if ($id_local==$row["usuarios"]) {
											echo "<br>";?>
											<a href="informacion.php?id=<?php echo $row["id"];?>"><?php echo $row["Nombre_actividad"];?></a´><?php
										}
									}
								}?>
								<?php
								if($x==$y){
									$y=$y+7;
									?>
								</tr>
								<tr>
									<?php 
								}
								?>
							</td>
							<?php
							$x=$x+1;
						}
						?>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<?php 
				} ?>
				<?php
				if ($mes=='5'){ 	
					?>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<?php 
						$x=1;
						$y=3;
						while($x<=30){
							?> 
							<td>
								<?php
								echo $x;?>
								<?php 
								$resultado=mysqli_query($conexion,$noviembre);
								while ($row=mysqli_fetch_assoc($resultado)) {
									$fechaEntera = strtotime($row["fecha_entrega"]);
									$dia = date("j", $fechaEntera);
									$meses = date("m", $fechaEntera);
									if($x==$dia && $meses==6){
										if ($id_local==$row["usuarios"]) {
											echo "<br>";?>
											<a href="informacion.php?id=<?php echo $row["id"];?>"><?php echo $row["Nombre_actividad"];?></a´><?php
										}
									}
								}?>
								<?php
								if($x==$y){
									$y=$y+7;
									?>
								</tr>
								<tr>
									<?php 
								}
								?>
							</td>
							<?php
							$x=$x+1;
						}
						?>
						<td></td>
					</tr>
					<?php 
				} ?>
				<?php
				if ($mes=='6'){ 	
					?>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<?php 
						$x=1;
						$y=1;
						while($x<=31){
							?> 
							<td>
								<?php
								echo $x;?>
								<?php 
								$resultado=mysqli_query($conexion,$noviembre);
								while ($row=mysqli_fetch_assoc($resultado)) {
									$fechaEntera = strtotime($row["fecha_entrega"]);
									$dia = date("j", $fechaEntera);
									$meses = date("m", $fechaEntera);
									if($x==$dia && $meses==7){
										if ($id_local==$row["usuarios"]) {
											echo "<br>";?>
											<a href="informacion.php?id=<?php echo $row["id"];?>"><?php echo $row["Nombre_actividad"];?></a´><?php
										}
									}
								}?>
								<?php
								if($x==$y){
									$y=$y+7;
									?>
								</tr>
								<tr>
									<?php 
								}
								?>
							</td>
							<?php
							$x=$x+1;
						}
						?>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<?php 
				} ?>
				<?php
				if ($mes=='7'){ 	
					?>
					<tr>
						<td></td>
						<td></td>
						<?php 
						$x=1;
						$y=5;
						while($x<=31){
							?> 
							<td>
								<?php
								echo $x;?>
								<?php 
								$resultado=mysqli_query($conexion,$noviembre);
								while ($row=mysqli_fetch_assoc($resultado)) {
									$fechaEntera = strtotime($row["fecha_entrega"]);
									$dia = date("j", $fechaEntera);
									$meses = date("m", $fechaEntera);
									if($x==$dia && $meses==8){
										if ($id_local==$row["usuarios"]) {
											echo "<br>";?>
											<a href="informacion.php?id=<?php echo $row["id"];?>"><?php echo $row["Nombre_actividad"];?></a´><?php
										}
									}
								}?>
								<?php
								if($x==$y){
									$y=$y+7;
									?>
								</tr>
								<tr>
									<?php 
								}
								?>
							</td>
							<?php
							$x=$x+1;
						}
						?>
						<td></td>
						<td></td>
					</tr>
					<?php 
				} ?>
				<?php
				if ($mes=='8'){ 	
					?>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<?php 
						$x=1;
						$y=2;
						while($x<=30){
							?> 
							<td>
								<?php
								echo $x;?>
								<?php 
								$resultado=mysqli_query($conexion,$noviembre);
								while ($row=mysqli_fetch_assoc($resultado)) {
									$fechaEntera = strtotime($row["fecha_entrega"]);
									$dia = date("j", $fechaEntera);
									$meses = date("m", $fechaEntera);
									if($x==$dia && $meses==9){
										if ($id_local==$row["usuarios"]) {
											echo "<br>";?>
											<a href="informacion.php?id=<?php echo $row["id"];?>"><?php echo $row["Nombre_actividad"];?></a´><?php
										}
									}
								}?>
								<?php
								if($x==$y){
									$y=$y+7;
									?>
								</tr>
								<tr>
									<?php 
								}
								?>
							</td>
							<?php
							$x=$x+1;
						}
						?>
					</tr>
					<?php 
				} ?>
				<?php
				if ($mes=='9'){ 	
					?>
					<tr>
						<?php 
						$x=1;
						$y=7;
						while($x<=31){
							?> 
							<td>
								<?php
								echo $x;?>
								<?php 
								$resultado=mysqli_query($conexion,$noviembre);
								while ($row=mysqli_fetch_assoc($resultado)) {
									$fechaEntera = strtotime($row["fecha_entrega"]);
									$dia = date("j", $fechaEntera);
									$meses = date("m", $fechaEntera);
									if($x==$dia && $meses==10){
										if ($id_local==$row["usuarios"]) {
											echo "<br>";?>
											<a href="informacion.php?id=<?php echo $row["id"];?>"><?php echo $row["Nombre_actividad"];?></a´><?php
										}
									}
								}?>
								<?php
								if($x==$y){
									$y=$y+7;
									?>
								</tr>
								<tr>
									<?php 
								}
								?>
							</td>
							<?php
							$x=$x+1;
						}
						?>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<?php 
				} ?>


			</table>
		</div>
	</center>
	<center>
		<br>
		<br>
		<button class="btn btn-secondary" id="bye" name="bye" style="text-align: center;">Cerrar session</button>
		<br>
		<br>
	</center>
</body>
<script type="text/javascript">

	setInterval(tiempo,1000);
	function tiempo(){
		var now= new Date();
		var dia = now.getDate();
		var seman = now.getDay();
		var mes = now.getMonth();
		var year = now.getFullYear();
		if(seman==0){
			var d="Domingo";
		}
		if(seman==1){
			var d="Lunes";
		}
		if(seman==2){
			var d="Martes";
		}
		if(seman==3){
			var d="Miércoles";
		}
		if(seman==4){
			var d="Jueves";
		}
		if(seman==5){
			var d="Viernes";
		}
		if(seman==6){
			var d="Sabado";
		}
		if(mes==0){
			var m="Enero"; 
		}
		if(mes==1){
			var m="Febrero"; 
		}
		if(mes==2){
			var m="Marzo"; 
		}
		if(mes==3){
			var m="Abril"; 
		}
		if(mes==4){
			var m="Mayo"; 
		}
		if(mes==5){
			var m="Junio"; 
		}
		if(mes==6){
			var m="Julio"; 
		}
		if(mes==7){
			var m="Agosto"; 
		}
		if(mes==8){
			var m="Septiembre"; 
		}
		if(mes==9){
			var m="Octubre"; 
		}
		if(mes==10){
			var m="Noviembre"; 
		}
		if(mes==11){
			var m="Diciembre"; 
		}
		var fecha=d+" "+dia+", "+m+" de "+year;
		fech.value=fecha;
	}
</script>
<script type="text/javascript">
	$('#tarea').click(tarea);
	$('#eliminar').click(eliminar);
	$('#anterior').click(anterior);
	$('#siguiente').click(siguiente);
	$('#bye').click(bye);
	function tarea(){
		<?php 
		$_SESSION['id']=$id_local;
		$_SESSION['usuario']=$usuario_local;
		?>
		$(location).attr('href','tarea.php');
	}
	function eliminar(){
		<?php 
		$_SESSION['id']=$id_local;
		$_SESSION['usuario']=$usuario_local;
		?>
		$(location).attr('href','eliminar.php');
	}
	function anterior(){
		var m=<?php echo $mes;?>;
		var mes;
		mes=parseInt(m);
		mes=mes-1;
		if(mes==-1){
			mes=11;
		}
		mes=mes.toString();
		console.log(mes);
		$.ajax({
			url:'siguiente.php',
			type:'post',
			data:{
				mes:mes
			}
		}).done(
		function(data){

		}
		);
		$(location).attr('href','noviembre.php');
	}
	function siguiente(){
		var m=<?php echo $mes;?>;
		var mes;
		mes=parseInt(m);
		mes=mes+1;
		if(mes==12){
			mes=0;
		}
		mes=mes.toString();
		console.log(mes);
		$.ajax({
			url:'siguiente.php',
			type:'post',
			data:{
				mes:mes
			}
		}).done(
		function(data){

		}
		);
		$(location).attr('href','noviembre.php');
	}
	function bye(){
		$(location).attr('href','inicio.php');
	}
</script>
</html>