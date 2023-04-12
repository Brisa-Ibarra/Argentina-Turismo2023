<?php

	include 'conexion_be.php';

	$correo = $_POST['correo'];
	$password = $_POST['password'];

	$consulta = "SELECT * FROM usuarios WHERE correo = '$correo' and password = '$password'";

	$ejecutar = mysqli_query($conexion, $consulta);

	$filas = mysqli_num_rows($ejecutar);

	if($filas > 0){
		echo '
			<script>
				window.location = "../home.php";
			</script>
		';
	}else {
		echo '
			<script>
				alert("Error de AUTENTICACION");
				window.location = "../login.php";
			</script>
		';
	}

	mysqli_fre_results($result);
	mysql_close($conexion)
?>