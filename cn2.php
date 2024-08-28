<?php 
$sname = "sql210.byethost.com";
$uname = "b17_33049102";
$password = "Rarw1757";

$cn_name = "b17_33049102_Calendario";

$conexion = mysqli_connect($sname, $uname, $password, $cn_name);

if(!$conexion){
    echo "Conexión Fallida";
    exit();
}?>