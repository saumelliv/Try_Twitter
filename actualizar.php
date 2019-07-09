<!DOCTYPE html>
<html>
<head>
	<title>actualizacion</title>
	<link rel="stylesheet" type="text/css" href="css/atras.css">
</head>
<body >

		<div class="container">	

		<div>
			<a href="index.php" id="tw" ><img src="twitter_512.png" alt=""></a>
			<h1>Twitter</h1>
		</div>
		<br>

			<?php 
			
			$id = $_POST["id"];

			$escrito= $_POST["escrito"];

			$conexion = mysqli_connect("localhost","root", "", "proyecto") or die("Problema en la Conexion");


			mysqli_query($conexion, "UPDATE twitter SET mensaje = '$escrito' WHERE twitter.id ='$id';");

			mysqli_close($conexion);

			echo "<h2>TU TWEET SE ACTUALIZO CORRECTAMENTE  :D !!</h2> <br>";

		 ?>
<hr>

	

		<a href='mensaje.php'><button type='submit' src='mensaje.php' name='operar' id='ir'>Ir al muro</button></a> <br>

		<a href='mensaje.php'><button type='submit' src='index.php' name='operar' id='ir'>Nuevo Tweet</button></a> <br>
		
	</div>

</body>
</html>