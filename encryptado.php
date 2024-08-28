<?php 
$pass=$_POST['pass'];
$pass2=$_POST['pass2'];
if (password_verify($pass2,$pass)) {
    echo '1';
}else{
	echo '2';
}
?>
