<?php

	include 'conexion_be.php';

	$nombre_completo = $_POST['nombre_completo'];
	$correo = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, password) 
			  VALUES('$nombre_completo', '$correo', '$usuario', '$password')";


	$ejecutar = mysqli_query($conexion, $query);

	if($ejecutar){
		echo '

			<script>
				alert("Usuario registrado exitosamente");
				window.location = "../login.php";
			</script>
		';
	}else {
		echo '

			<script>
				alert("Intentalo de nuevo, usuario no registrado");
				window.location = "../login.php";
			</script>
		';
	}

	mysqli_close($conexion);


?>